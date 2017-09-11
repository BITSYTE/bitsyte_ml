<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BinaryTreeController extends Controller
{

    public function index()
    {
        $breadcrumbs[0]['name']='Binary';
//        $breadcrumbs[0]['route']='binarytree';
        /*$breadcrumbs[1]['name']='summary';
        $breadcrumbs[1]['route']='summary';*/

        return view('binarytree.index')->with(['breadcrumbs'=>$breadcrumbs]);
    }

    public function show()
    {
        return view('');
    }

}
