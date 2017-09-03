<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WalletsController extends Controller
{

    public function index()
    {
        $breadcrumbs[0]['name']='Wallets';
        $breadcrumbs[0]['route']='wallets';
        $breadcrumbs[1]['name']='summary';
        $breadcrumbs[1]['route']='summary';

        return view('wallet.index')->with(['breadcrumbs'=>$breadcrumbs]);
    }

    public function show()
    {
        $breadcrumbs[0]['name']='wallets';
        $breadcrumbs[0]['route']='wallets';
        $breadcrumbs[1]['name']='nombre de wallet';


        return view('wallet.show')->with(['breadcrumbs'=>$breadcrumbs]);
    }


}
