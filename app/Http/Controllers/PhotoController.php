<?php

namespace App\Http\Controllers;

use App\Http\Utils\Utils;

class PhotoController extends Controller
{
    public function show()
    {
        Utils::Instance()->resetLocale(request()->server('HTTP_ACCEPT_LANGUAGE'));
        $photos_dir = app_path().'\\..\\'.env('PHOTOS_DIR').'/';
        $photos_folder = array_diff(scandir($photos_dir), array('..', '.'));

        $array_of_photos = array();


        foreach ($photos_folder as $folder)
        {
            if (!is_dir($photos_dir.$folder))
                continue;

            $array_of_folder = array();
            $photos_of_folder = array_diff(scandir($photos_dir.$folder), array('..', '.'));
            foreach ($photos_of_folder as $photo)
            {
                $path_to_photo = $photos_dir.$folder.'/'.$photo;
                $photo_size = getimagesize($path_to_photo);
                $array_of_folder[$path_to_photo] = $photo_size[0].'x'.$photo_size[1];
            }
            $array_of_photos[$folder] = $array_of_folder;

        }
        return view('photos.show', compact('array_of_photos'));
    }
}
