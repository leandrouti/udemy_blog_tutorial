<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;


class SettingsController extends Controller
{
    public function index(){
        return view('admin.settings.setting')->with('setting', Setting::first());
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //

        $setting = Setting::first();

    }
}
