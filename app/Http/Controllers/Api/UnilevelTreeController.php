<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnilevelTreeController extends Controller
{
    public function treeJson(User $user)
    {

        $node = $user->unilevelNode()->firstOrFail();

        $nodes = $node->withDepth()->having('depth', '<=', 1)->with('user', 'product')->get()->toTree()->toArray();

        $array = [];

        function node($node, $position) {
            return [
                'uuid' => $node['user']['uuid'],
                'username' => $node['user']['username'],
                'product' => $node['product']['name'],
                'img' => asset('backoffice/images')."/".$node['product']['image'],
            ];
        }

        function transverse($nodes, &$array)
        {
            $index = 1;
            foreach ($nodes as $node) {

                $array[] = node($node, $index);

                if (!empty($node['children'])) {
                    transverse($node['children'], $array);
                }
            }

            return $array;
        }

        return response()->json([transverse($nodes, $array)]);
    }
}
