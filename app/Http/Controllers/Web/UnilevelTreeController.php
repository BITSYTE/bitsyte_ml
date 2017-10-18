<?php

namespace App\Http\Controllers\Web;

use App\Models\Product;
use App\Models\UnilevelTree;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnilevelTreeController extends Controller
{

    protected $breadcrumbs;

    /**
     * UsersController constructor.
     *
     * @internal param $User
     */
    public function __construct()
    {
        $this->breadcrumbs['name'][0] = 'Unilevel';
        $this->breadcrumbs['route'][0] = 'Unilevel';
    }

    /**
     * RETURN THE VIEW OF UNILEVEL TREE
     * @return $this
     */
    public function index()
    {
        $this->breadcrumbs['name'][1] = 'Unilevel';
        $this->breadcrumbs['route'][1] = 'Unilevel';
        $products = Product::all();
        $user= User::where('id',8)->first();
//        dd($user->uuid);
        $paquetes = array();
        foreach ($products as $product ){
            $paquetes[$product->name] = asset('backoffice/images')."/".$product->image;
        }

        return view('trees.unilevel.index')->with([
            'breadcrumbs'=>$this->breadcrumbs,
            'name' => 'UniLevel Tree',
//            'uuid' => auth()->user()->uuid,
            'uuid' => $user->uuid,
            'paquetes' => $paquetes,
        ]);
    }

    public function create()
    {
        /** @var User $user */
        $user = factory(User::class)->create();
        $product = factory(Product::class)->create();

        $root = UnilevelTree::create();

        $user->unilevelNode()->save($root);
        $product->unilevelNode()->save($root);

        /*$user = factory(User::class)->create();

        $node1 = UnilevelTree::create();
        $node1->appendToNode($root);

        $user->unilevelNode()->save($node1);

        $user = factory(User::class)->create();

        $node2 = UnilevelTree::create();
        $node2->appendToNode($root);

        $user->unilevelNode()->save($node2);

        $user = factory(User::class)->create();

        $node3 = UnilevelTree::create();
        $node3->appendToNode($root);

        $user->unilevelNode()->save($node3);

        $user = factory(User::class)->create();

        $node4 = UnilevelTree::create();
        $node4->appendToNode($root);

        $user->unilevelNode()->save($node4);

        $user = factory(User::class)->create();

        $node5 = UnilevelTree::create();
        $node5->appendToNode($root);

        $user->unilevelNode()->save($node5);

        $user = factory(User::class)->create();

        $node6 = UnilevelTree::create();
        $node6->appendToNode($root);

        $user->unilevelNode()->save($node6);

        $user = factory(User::class)->create();

        $node7 = UnilevelTree::create();
        $node7->appendToNode($root);

        $user->unilevelNode()->save($node7);*/
    }

}
