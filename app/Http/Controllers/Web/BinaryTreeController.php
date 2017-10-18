<?php

namespace App\Http\Controllers\Web;

use App\Models\BinaryTree;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BinaryTreeController extends Controller
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
     * RETURN THE VIEW OF BINARYTREE WHIT YOUR DATA
     * @return $this
     */
    public function index()
    {
        $this->breadcrumbs['name'][1] = 'Binary';
        $this->breadcrumbs['route'][1] = 'Binary';

        $product = Product::all();

        return view('trees.binary.index')->with([
            'breadcrumbs' => $this->breadcrumbs,
            'uuid' => auth()->user()->uuid,
            'name' => 'Binary Tree',
        ]);
    }

    public function create()
    {
        /** @var User $user */
        $user = factory(User::class)->create();
        $product = factory(Product::class)->create();

        $root = BinaryTree::create(['side' => 0]);

        $user->binaryNode()->save($root);
        $product->binaryNode()->save($root);

        $user = factory(User::class)->create();

        $node1 = BinaryTree::create(['side' => 1]);
        $node1->appendToNode($root);

        $user->binaryNode()->save($node1);

        $user = factory(User::class)->create();

        $node2 = BinaryTree::create(['side' => 2]);
        $node2->appendToNode($root);

        $user->binaryNode()->save($node2);

        $user = factory(User::class)->create();

        $node3 = BinaryTree::create(['side' => 2]);
        $node3->appendToNode($node1);

        $user->binaryNode()->save($node3);

        $user = factory(User::class)->create();

        $node4 = BinaryTree::create(['side' => 2]);
        $node4->appendToNode($node2);

        $user->binaryNode()->save($node4);

        /*$user = factory(User::class)->create();

        $node5 = BinaryTree::create();
        $node5->appendToNode($node2);

        $user->binaryNode()->save($node5);

        $user = factory(User::class)->create();

        $node6 = BinaryTree::create();
        $node6->appendToNode($node2);

        $user->binaryNode()->save($node6);

        $user = factory(User::class)->create();

        $node7 = BinaryTree::create();
        $node7->appendToNode($node6);

        $user->binaryNode()->save($node7);*/
    }

    /**
     * THIS METHOD RESPONSE A AJAX AND RETURN THE ARRAY OF USER IN A BINARYTREE
     * @return mixed
     */
    public function ajax()
    {
        $json = array();

        for ($i = 0; $i < 1; $i++) {
            $json[$i]["username"] = "asdrubal$i";
            $json[$i]["paquete"] = "gold";
            $json[$i]["algo"] = "algo";
        }

        $json = json_encode($json);
        return $json;

    }

}
