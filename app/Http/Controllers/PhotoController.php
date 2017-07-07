<?php

namespace App\Http\Controllers;

use App\Http\Utils\Utils;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function show()
    {
        Utils::Instance()->resetLocale(request()->server('HTTP_ACCEPT_LANGUAGE'));
        $directories = Storage::allDirectories(env("PHOTOS_DIR"));
        $array_of_photos = array();

        foreach ($directories as $directory)
        {
            $photo = array();
            foreach (Storage::allFiles($directory) as $file)
            {
                $dimension = getimagesizefromstring(Storage::get($file));
                $photo[Storage::url($file)] = $dimension[0].'x'.$dimension[1];
            }
            $array_of_photos[basename($directory)] = $photo;
        }
        return view('photos.show', compact('array_of_photos'));
    }
}
