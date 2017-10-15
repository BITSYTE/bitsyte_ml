<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\UserStoreRequest;
use App\Models\Product;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class UsersControllers extends Controller
{

    /**
     * @var User model
     */
    protected $user;

    /**
     * @var Product model
     */
    protected $product;

    /**
     * @var array ERRORS
     */
    public $errors = [];

    /**
     * UsersController constructor.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Product $product
     *
     * @internal param $User
     */
    public function __construct(User $user, Product $product)
    {
        $this->user = $user;
        $this->product = $product;

    }

    /**
     * RETURN VIEW OF NEW USER
     * @return $this
     */
    public function create()
    {
        $breadcrumbs[0]['name'] = 'Users';
        $breadcrumbs[0]['route'] = 'users';
        $breadcrumbs[1]['name'] = 'New';
        $breadcrumbs[1]['route'] = 'new';

        $products = $this->product->select('name', 'id', 'price', 'image', 'uuid')->get();
        return view('Users.new')
            ->with([
                'breadcrumbs' => $breadcrumbs,
                'products' => $products,
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
            $res["ok"] = 'user_exist';
            $res["errors"] = $this->errors;
            $json = json_encode($res);
            return response("$json", 201);
        } else {
            try {
                DB::beginTransaction();
                $product = $this->product->find($request->input('product_id'));
                $user = $this->user->fill($request->only(['first_name', 'last_name', 'birthday', 'password', 'email', 'username']));
                $user->status = "pending";
                $user->save();
                $product->users()->save($user);

                DB::commit();

                $res["ok"] = "ok";
                $json = json_encode($res);
                return response("$json", 201);

            } catch (\Exception $e) {
                return redirect()
                    ->back()
                    ->withInput(Input::all())
                    ->with('error', 'The new user could not be created');
            }
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
