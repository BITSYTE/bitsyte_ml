<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    /*public function __construct()
    {
        $this->middleware('guest');
    }*/

    public function index()
    {
        return view('backoffice.dashboard');
    }

}
