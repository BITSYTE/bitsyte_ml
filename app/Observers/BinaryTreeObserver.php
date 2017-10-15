<?php
/**
 * Created by PhpStorm.
 * User: Herminio
 * Date: 14/10/2017
 * Time: 11:08
 */

namespace App\Observers;

use App\Models\BinaryTree;

class BinaryTreeObserver
{
    /**
     * Listen to the BinaryTree created event.
     *
     * @param BinaryTree $node
     * @return void
     * @internal param BinaryTree $tree
     */
    public function created(BinaryTree $node)
    {

        if ($this->isNotRoot($node)) {

            $child = $node;
            $volume = $node->product->volumes->first()->toArray()['value'];

            foreach ($node->getAncestors()->toFlatTree()->reverse() as $ancestor) {

                if ($child->side == 1) {
                    $ancestor->volume_lft = $ancestor->volume_lft + $volume;
                }

                if ($child->side == 2) {
                    $ancestor->volume_rgt = $ancestor->volume_rgt + $volume;
                }

                $ancestor->save();
                $child = $ancestor;
            }
        }
        //dd($node);
    }

    public function isNotRoot(BinaryTree $tree)
    {
        return $tree->isRoot() ? false : true;
    }
}