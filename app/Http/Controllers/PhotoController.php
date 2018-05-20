<?php

namespace App\Http\Controllers;

use App\Http\Utils\Utils;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function show($date = null)
    {
        Utils::Instance()->resetLocale(request()->server('HTTP_ACCEPT_LANGUAGE'));
        $directories = Storage::allDirectories(env("PHOTOS_DIR"));
        $finished = 0;
        $page = 1;
        $max_photos_to_load = env("PHOTOS_TO_RELOAD_INITIAL_VALUE_PHOTO_ALBUM");

        if ($date == NULL || $date == '')
        {
            $date = date('Y-m-d');
        }

        $array_of_photos = app('App\Http\Controllers\PostcardController')->retrieve_photos($directories, $date, $max_photos_to_load, $finished);

        return view('photos.show', compact('array_of_photos', 'date', 'finished', 'page'));
    }
}
