<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WalletsController extends Controller
{

    public function index()
    {
        $breadcrumbs[0]['name']='wallet';
        $breadcrumbs[0]['route']='wallet';
        $breadcrumbs[1]['name']='summary';
        $breadcrumbs[1]['route']='summary';

        return view('wallet.index')->with(['breadcrumbs'=>$breadcrumbs]);
    }

    public function show()
    {
        $breadcrumbs[0]['name']='wallet';
        $breadcrumbs[0]['route']='';
        $breadcrumbs[1]['name']='details';


        return view('wallet.show')->with(['breadcrumbs'=>$breadcrumbs]);
    }


}
