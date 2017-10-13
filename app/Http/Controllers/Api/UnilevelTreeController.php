<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnilevelTreeController extends Controller
{
    public function treeJson(User $user)
    {
        $node = $user->unileveNode()->first();

        $nodes = $node->withDepth()->having('depth', '<=', 3)->with('user', 'product')->get()->toTree()->toArray();

        $array = [];

        function transverse($nodes, &$array)
        {
            $index = 1;
            foreach ($nodes as $node) {

                $array[] = [
                    'username' => $node['user']['username'],
                    'type' => empty($node['children']) ? 'add' : 'user',
                    'product' => $node['product']['name'],
                    'position' => [$node['depth'], $index++]
                ];

                if (is_array($node['children'])) transverse($node['children'], $array);
            }

            return $array;
        }

        return response()->json(['tree' => transverse($nodes, $array)]);
    }
}
