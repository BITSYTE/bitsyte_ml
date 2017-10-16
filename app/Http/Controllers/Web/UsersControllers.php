<?php

namespace App\Http\Controllers\Web;

use DB;
use App\Models\User;
use App\Models\Product;
use App\Jobs\CreateUnilevelJob;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\UserStoreRequest;


class UsersControllers extends Controller
{
    protected $breadcrumbs;

    /**
     * UsersController constructor.
     *
     * @internal param $User
     */
    public function __construct()
    {
        $this->breadcrumbs['name'][0] = 'Users';
        $this->breadcrumbs['route'][0] = 'users';
    }

    /**
     * RETURN VIEW OF NEW USER
     * @return $this
     */
    public function create()
    {
        $this->breadcrumbs['name'][1] = 'New';
        $this->breadcrumbs['route'][1] = 'new';

        $user = auth()->user();
        $products = Product::select('name', 'id', 'price', 'image', 'uuid')->get();

        return view('users.create')
            ->with([
                'breadcrumbs' => $this->breadcrumbs,
                'products' => $products,
                'wallets' => $user->wallets,
            ]);
    }

    /**
     * Store User IN DATABASE
     * @param UserStoreRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserStoreRequest $request)
    {

        //VERIFICO SI YA EXISTE EL USUARIO
        if ($this->ifExist($request)) {
            $res['ok'] = 'user_exist';
            $res['errors'] = $this->errors;
            $json = json_encode($res);
            return response("$json", 201);
        } else {
//            try {
                DB::beginTransaction();
                $user = User::create($request->only(['first_name', 'last_name', 'birthday', 'password', 'email', 'username', 'product_id']));
                $user->status = 'active';
                $user->save();
                DB::commit();

                CreateUnilevelJob::dispatch($user, auth()->user());

                $res['ok'] = 'ok';
                $json = json_encode($res);
                return response($json, 201);

            /*} catch (\Exception $e) {
                return response($json, 500);
                return redirect()
                    ->back()
                    ->withInput(Input::all())
                    ->with('error', 'The new user could not be created');
            }*/
        }

    }

    /**
     * VALID IF USER AND EMAIL EXIST
     * AND RETURN ERROR IF EXIST
     * @param $request
     * @return bool
     */
    public function ifExist($request)
    {
        $type = env('APP_LOGIN_WITH');

        $this->user = User::where('username', $request->input('username'))
            ->where(function ($q) use ($type, $request) {
                if ($type == "email") {
                    $q->orWhere('email', $request->input('email'));
                }
            })->first();

        $band = $this->user ? true : false;
        if (!empty($this->user->usename)) {
            $this->errors['user'] = ['username already exist'];
        }
        if (!empty($this->user->email)) {
            $this->errors['email'] = ['email already exist'];
        }
        return $band;
    }
}
