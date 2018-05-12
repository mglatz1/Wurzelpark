<?php

namespace App\Http\Controllers;

use App\Http\Utils\Utils;
use Illuminate\Support\Facades\Storage;

class PostcardController extends Controller
{
    public function show($date = null)
    {
        Utils::Instance()->resetLocale(request()->server('HTTP_ACCEPT_LANGUAGE'));
        $directories = Storage::allDirectories(env("PHOTOS_DIR"));
        $array_of_photos = array();

        if ($date == NULL || $date == '')
        {
            $date = date('Y-m-d');
        }

        // photos
        foreach ($directories as $directory)
        {
            if (strcmp(basename($directory), $date) != 0)
            {
                continue;
            }

            $photo = array();
            foreach (Storage::allFiles($directory) as $file)
            {
                $dimension = getimagesizefromstring(Storage::get($file));
                $photo[Storage::url($file)] = $dimension[0].'x'.$dimension[1];
            }
            $array_of_photos[basename($directory)] = $photo;
            break;
        }

        // postcard templates
        $postcards = array();

        foreach (Storage::allFiles(env("POSTCARD_TEMPLATES_FOLDER")) as $file) {
            array_push($postcards, Storage::url($file));
        }
        return view('postcard.show', compact('array_of_photos', 'date', 'postcards'));
    }
}
