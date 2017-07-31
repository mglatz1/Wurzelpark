<?php

namespace App\Http\Controllers;

use App\Http\Utils\Utils;
use \App\Information;

class InformationController extends Controller
{
    public function index()
    {
        Utils::Instance()->resetLocale(request()->server('HTTP_ACCEPT_LANGUAGE'));
        $about_info = Information::getInfo();
        return view('info.info', compact('about_info'));
    }

    public function show($name)
    {
        Utils::Instance()->resetLocale(request()->server('HTTP_ACCEPT_LANGUAGE'));
        $info_item = Information::getByName($name);
        if (sizeof($info_item) == 0 || sizeof($info_item->translations()->where('locale', app()->getLocale())->first()) == 0) {
            return redirect()->home()->with('error', __("messages.error_no_element_found"));
        }
        return view('info.show', compact('info_item'));
    }
}
