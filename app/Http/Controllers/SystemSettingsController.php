<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings\SystemSettings;

class SystemSettingsController extends Controller
{
    public function index(SystemSettings $system)
    {
        $currencies = ['&#36;','&#8361;','&#8364;', '&#8377;', '&#8358;', '&#165;'];
        return view('settings.index', compact('system', 'currencies'));
    }


    public function updateSystemSettings(Request $request, SystemSettings $system)
    {
        $this->validate($request, [
            'app_name' => 'required',
            'address' => 'required',
            // 'footer' => 'required',
            'logo' => 'nullable|file|image',
            'favicon' => 'nullable|file|image',

        ]);

        if ($request->hasFile('logo')) {
            $logo = time() . '.' . $request->logo->extension();
            $request->file('logo')->storeAs('public/system', $logo);
            
        }
        if ($request->hasFile('favicon')) {
            $favicon = time() . '.' . $request->favicon->extension();
            $request->file('favicon')->storeAs('public/system', $favicon);
            
        }

        $system->app_name = $request->app_name;
        if ($request->hasFile('logo')) {
            $system->logo = $logo;
        }
        if ($request->hasFile('favicon')) {
            $system->favicon = $favicon;
        }

        $system->address = $request->address;
        // $system->footer = $request->footer;
        $system->save();
        return redirect()->route('app.dashboard')->with('System Settings Has Been Updated');
    }
}
