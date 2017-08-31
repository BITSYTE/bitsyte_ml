<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function index()
    {
        $breadcrumbs[0]['name']='dashboard';
        $breadcrumbs[0]['route']='dashboard';

        return view('dashboard.index')->with(['breadcrumbs'=>$breadcrumbs]);
    }

}
