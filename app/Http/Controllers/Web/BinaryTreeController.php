<?php

namespace App\Http\Controllers\Web;

use App\Models\BinaryTree;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BinaryTreeController extends Controller
{
    /**
     * RETURN THE VIEW OF BINARYTREE WHIT YOUR DATA
     * @return $this
     */
    public function index()
    {
        $breadcrumbs[0]['name']='Binary';

        $nodes = BinaryTree::withDepth()->having('depth', '<=', 1)->with('user', 'product')->get()->toTree()->toArray();

        $array = [];

        function transverse($nodes, &$array) {
            $index = 1;
            foreach ($nodes as $node) {

                $array[] = [
                    'username' => $node['user']['username'],
                    'type' => empty($node['children']) ? 'add': 'user',
                    'position' => [$node['depth'], $index++]
                ];

                if (is_array($node['children'])) transverse($node['children'], $array);
            }

            return json_encode($array);
        }

        $array = transverse($nodes, $array);

//        dd($array);

        return view('trees.binary.index')->with(['breadcrumbs'=>$breadcrumbs])->with(['users'=>$array]);
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

        $node1 = BinaryTree::create(['side' => 2]);
        $node1->appendToNode($root);

        $user->binaryNode()->save($node1);

        $user = factory(User::class)->create();

        $node2 = BinaryTree::create(['side' => 2]);
        $node2->appendToNode($node1);

        $user->binaryNode()->save($node2);

        $user = factory(User::class)->create();

        $node3 = BinaryTree::create(['side' => 2]);
        $node3->appendToNode($node2);

        $user->binaryNode()->save($node3);

        $user = factory(User::class)->create();

        $node4 = BinaryTree::create(['side' => 2]);
        $node4->appendToNode($node3);

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

        for ($i=0; $i<1;$i++){
            $json[$i]["username"]="asdrubal$i";
            $json[$i]["paquete"]="gold";
            $json[$i]["algo"]="algo";
        }

        $json = json_encode($json);
        return $json;

    }

}
