<?php

namespace App\Http\Controllers\Api;

use App\Models\BinaryTree;
use App\Models\User;
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
                return $position;
            } else {
                return $node['side'] == 1 ? $position: $position + 1;
            }
        }

        function node($node, $position) {
            return [
                'username' => $node['user']['username'],
                'type' => 'user',
                'product' => $node['product']['name'],
                'position' => [
                    $node['depth'],
                    fix_position($node, $position),
                    $node['side'],
                ],
            ];
        }


        function transverse($nodes, &$array)
        {
            $position = 1;

            foreach ($nodes as $node) {

                $array[] = node($node, $position);

                if (!empty($node['children'])) {
                    transverse($node['children'], $array);
                }

            }

            return $array;
        }

        return response()->json(['tree' => transverse($nodes, $array)]);
    }
}
