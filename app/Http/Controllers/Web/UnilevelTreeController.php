<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnilevelTreeController extends Controller
{

    public function index()
    {
        $breadcrumbs[0]['name']='Unilevel Tree';
        $breadcrumbs[0]['route']='unileveltree';
        /*$breadcrumbs[1]['name']='summary';
        $breadcrumbs[1]['route']='summary';*/

        return view('unileveltree.index')->with(['breadcrumbs'=>$breadcrumbs]);
    }

    public function show()
    {
        return view('');
    }

}
