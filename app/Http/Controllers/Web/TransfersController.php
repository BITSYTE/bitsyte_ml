<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransfersController extends Controller
{
    protected $breadcrumbs;

    public function __construct()
    {
        $this->breadcrumbs['name'][0] = 'transfer';
        $this->breadcrumbs['route'][0] = 'transfer';
    }

    public function index()
    {
        $this->breadcrumbs['name'][1]='transfer';
        $this->breadcrumbs['route'][1]='transfer';
        /*$breadcrumbs[1]['name']='summary';
        $breadcrumbs[1]['route']='summary';*/

        return view('transfers.index')->with(['breadcrumbs'=>$this->breadcrumbs]);

    }
}
