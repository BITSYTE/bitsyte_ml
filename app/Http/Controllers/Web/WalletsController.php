<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WalletsController extends Controller
{

    /**
     * THIS METHOD RETURN THE VIEW SHOWING AL WALLETS
     * @return $this
     */
    public function index()
    {
        
        $breadcrumbs[0]['name']='Wallets';
        $breadcrumbs[0]['route']='wallets';
        $breadcrumbs[1]['name']='summary';
        $breadcrumbs[1]['route']='summary';

        return view('wallet.index')->with(['breadcrumbs'=>$breadcrumbs]);
    }

    /**
     * THIS METHOD RETURN THE INFORMATION AND VIEW OF A WALLET
     * @param $name
     *
     * @return $this
     */
    public function show($name)
    {
        $breadcrumbs[0]['name']='wallets';
        $breadcrumbs[0]['route']='wallets';
        $breadcrumbs[1]['name']='Details';


        return view('wallet.show')->with(['breadcrumbs'=>$breadcrumbs,'name'=>$name]);
    }


}
