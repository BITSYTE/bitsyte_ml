<?php

namespace App\Http\Controllers\Web\Admin;

use App\Models\SystemSettings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{

    public function index()
    {
        $settings = SystemSettings::Where('status','!=','archive')->get();
        dd($settings);
    }
}
