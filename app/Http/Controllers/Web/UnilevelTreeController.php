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


}
