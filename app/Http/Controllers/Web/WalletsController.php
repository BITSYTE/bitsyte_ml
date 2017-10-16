<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WalletsController extends Controller
{
    protected $user;
    protected $breadcrumbs;

    public function __construct()
    {
        $this->user = auth()->user();
        $this->breadcrumbs['name'][0] = 'wallets';
        $this->breadcrumbs['route'][0] = 'wallets';
    }

    /**
     * THIS METHOD RETURN THE VIEW SHOWING AL WALLETS
     * @return $this
     */
    public function index()
    {

        $this->breadcrumbs['name'][1]='summary';
        $this->breadcrumbs['route'][1]='summary';


        return view('wallet.index')->with(['breadcrumbs'=>$this->breadcrumbs]);
    }

    /**
     * THIS METHOD RETURN THE INFORMATION AND VIEW OF A WALLET
     * @param $name
     *
     * @return $this
     */
    public function show($name)
    {
        $this->breadcrumbs['name'][1]='Details';
        $this->breadcrumbs['route'][1]='Details';



        return view('wallet.show')->with(['breadcrumbs'=>$this->breadcrumbs,'name'=>$name]);
    }


}
