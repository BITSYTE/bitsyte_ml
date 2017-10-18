<?php
/**
 * Created by PhpStorm.
 * User: Herminio
 * Date: 18/10/2017
 * Time: 9:27
 */

namespace App\Helpers;


class Tree
{
    private $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function addRoot($node)
    {
        if(empty($this->root)) {
            $this->root = $node;
        }
    }
}