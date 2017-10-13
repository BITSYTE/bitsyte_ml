<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransfersController extends Controller
{
    public function index()
    {
        $breadcrumbs[0]['name']='transfer';
        $breadcrumbs[0]['route']='transfer';
        /*$breadcrumbs[1]['name']='summary';
        $breadcrumbs[1]['route']='summary';*/

        return view('transfers.index')->with(['breadcrumbs'=>$breadcrumbs]);

    }
}
