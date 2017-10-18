<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\BinaryTree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BinaryTreeController extends Controller
{
    public function treeJson(User $user)
    {

        $node = $user->binaryNode()->first();

        $nodes = $node->withDepth()->having('depth', '<=', 3)->with('user', 'product')->get()->toTree()->toArray();

        $array = [];

        function fix_position($node, $position) {

            if ($node['depth'] == 0) {
                return 0;
            }

            if (  $node['side'] == 1 ) {
                $position['left'] = ($position['left'] * 2) + 1;
                return $position['left'];
            }

            if (  $node['side'] == 2 ) {
                $position['right'] = ($position['right'] * 2) + 2;
                return $position['right'];
            }

        }

        function node($node, $position ) {
            return [
                'uuid' => $node['user']['uuid'],
                'username' => $node['user']['username'],
                'type' => 'user',
                'product' => $node['product']['name'],
                'position' => [
                    $node['depth'],
                    $position,
                    $node['side'],
                ],
            ];
        }

        $parent['left'] = 0;
        $parent['right'] = 0;

        function transverse($nodes, &$array, &$parent)
        {
            foreach ($nodes as $node) {

                if (!empty($node['children'])) {
                    transverse($node['children'], $array, $parent);
                }

                $pos = fix_position($node, $parent);

                $array[] = node($node, $pos);

                if (!empty($node['children'])) {
                    transverse($node['children'], $array, $parent);
                }
            }

            return $array;
        }

        return response()->json(['tree' => transverse($nodes, $array, $parent)]);
    }

    public function create(Request $request)
    {
        /*$parent = User::whereUuid($request)->first();
        $user = User::whereUuid($request)->first();

        $parent->binaryNode()->first();

        $newGen = $parent->view_position[0] + 1;
        $newCell = $parent->view_position[1] * 2 - ($side == 1 ? 1:0);

        $user->binaryNode()->create([
            "view_position" => [$newGen, $newCell]
        ]);*/

    }
}
