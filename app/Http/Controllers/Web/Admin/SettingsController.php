<?php

namespace App\Http\Controllers\Web\Admin;

use App\Models\SystemSettings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{

    /**
     * RETURN THE MAIN VIEW OF SETTINGS WHIT A LIST OF AL SETTING
     * @return $this
     */
    public function index()
    {
        $settings = SystemSettings::Where('status','!=','archive')->get();
//        dd($settings[0]->data);
//        $data = json_encode($settings[0]->data);
//        dd($data);
        return view('admin.settings.index')
            ->with([
                'settings'    => $settings,
            ]);
    }
}
