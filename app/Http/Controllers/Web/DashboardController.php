<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function index()
    {
        $breadcrumbs[0]['name']='home';
        $breadcrumbs[0]['route']='home';

        return view('dashboard.index')->with(['breadcrumbs'=>$breadcrumbs]);
    }

}
