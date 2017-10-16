<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    /**
     * RETURN THE VIEW OF DASHBOARD
     * @return $this
     */
    public function index()
    {
        $breadcrumbs['name'][0] = 'Home';
        $breadcrumbs['route'][0] = 'home';

        $breadcrumbs['name'][1] = '';
        $breadcrumbs['route'][1] = '';

        return view('dashboard.index')->with([
            'name' => 'HOME',
            'breadcrumbs' => $breadcrumbs
        ]);
    }

}
