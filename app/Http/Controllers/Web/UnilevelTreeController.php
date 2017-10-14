<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnilevelTreeController extends Controller
{

    /**
     * RETURN THE VIEW OF UNILEVEL TREE
     * @return $this
     */
    public function index()
    {
        $breadcrumbs[0]['name']='Unilevel';
//        $breadcrumbs[0]['route']='unileveltree';
        /*$breadcrumbs[1]['name']='summary';
        $breadcrumbs[1]['route']='summary';*/

        return view('trees.unilevel.index')->with(['breadcrumbs'=>$breadcrumbs]);
    }

    public function create()
    {
        /** @var User $user */
        $user = factory(User::class)->create();
        $product = factory(Product::class)->create();

        $root = BinaryTree::create();

        $user->binaryNode()->save($root);
        $product->binaryNode()->save($root);

        $user = factory(User::class)->create();

        $node1 = BinaryTree::create();
        $node1->appendToNode($root);

        $user->binaryNode()->save($node1);

        $user = factory(User::class)->create();

        $node2 = BinaryTree::create();
        $node2->appendToNode($root);

        $user->binaryNode()->save($node2);

        $user = factory(User::class)->create();

        $node3 = BinaryTree::create();
        $node3->appendToNode($node1);

        $user->binaryNode()->save($node3);

        $user = factory(User::class)->create();

        $node4 = BinaryTree::create();
        $node4->appendToNode($node1);

        $user->binaryNode()->save($node4);

        $user = factory(User::class)->create();

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

        $user->binaryNode()->save($node7);
    }

}
