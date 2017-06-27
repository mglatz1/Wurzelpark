<?php

namespace App\Http\Controllers;

use App\Http\Utils\Utils;

class PhotoController extends Controller
{
    public function show()
    {
        Utils::Instance()->resetLocale(request()->server('HTTP_ACCEPT_LANGUAGE'));
        return view('photos.show');
    }
}
