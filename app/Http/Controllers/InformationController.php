<?php

namespace App\Http\Controllers;

use \App\Information;

class InformationController extends Controller
{
    public function index()
    {
        $about_info = Information::getInfo();
        return view('info.info', compact('about_info'));
    }

    public function show($name)
    {
        $constants = "constants.".auth()->user()->language;

        $info_item = Information::getByName($name)->first();

        if (count($info_item) == null) {
            return redirect()->home()->with('error', config($constants.".error_no_element_found"));
        }
        return view('info.show', compact('info_item'));
    }
}
