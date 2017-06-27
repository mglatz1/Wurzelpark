<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Utils\Utils;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Utils::Instance()->resetLocale(request()->server('HTTP_ACCEPT_LANGUAGE'));
        return view('welcome');
    }
}
