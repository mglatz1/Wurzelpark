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
        $info = Information::getByName($name);

        if (count($info) == 0) {
            $error_message = 'Kein Element gefunden.';
            return view('error', compact('error_message'));
        }
        $info_item = $info[0];
        return view('info.show', compact('info_item'));
    }
}
