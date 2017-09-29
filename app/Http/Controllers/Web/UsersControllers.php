<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\UserStoreRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
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

    /*
     * UsersController constructor.
     * @param User
     */
    public function __construct(User $user, Product $product)
    {
        $this->user     = $user;
        $this->product  = $product;

    }
    public function new()
    {
        $breadcrumbs[0]['name']='Users';
        $breadcrumbs[0]['route']='users';
        $breadcrumbs[1]['name']='New';
        $breadcrumbs[1]['route']='new';

        $products = $this->product->select('name','id','price','image','uuid')->get();
        return view('Users.new')
            ->with([
                'breadcrumbs'   =>  $breadcrumbs,
                'products'      =>  $products
            ]);
    }

    /**
     * Store User
     * @param UserStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserStoreRequest $request)
    {
        try {
            DB::beginTransaction();
            $product    = $this->product->find($request->input('product_id'));
            $user       = $this->user->fill($request->only(['first_name','last_name','birthday','password','email']));
            $user->save();
            $product->users()->save($user);

        }catch (\Exception $e) {
            DB::rollBack();
            return redirect()
                ->back()
                ->withInput(Input::all())
                ->with('error', 'The new user could not be created');

        }

    }
}
