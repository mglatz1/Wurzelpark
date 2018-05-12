<?php

namespace App\Http\Controllers;

use App\Http\Utils\Utils;
use App\Jobs\GenerateSendPostcard;
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

        $email = "";
        if (auth()->id()) {
            $email = auth()->user()->email;
        }

        return view('postcard.show', compact('array_of_photos', 'date', 'postcards', 'email'));
    }

    public function store()
    {
        Utils::Instance()->resetLocale(request()->server('HTTP_ACCEPT_LANGUAGE'));

        $template_filename_with_extension = basename(request('selectedtemplate'));
        $template_filename = preg_replace('/\\.[^.\\s]{3,4}$/', '', $template_filename_with_extension);

        $first_image = request('selectedimages')[0];
        $second_image = "";

        if (count(request('selectedimages')) > 1) {
            $second_image = request('selectedimages')[1];
        }

        dispatch(new GenerateSendPostcard($template_filename, request('email'), request('email2'),
            $first_image, $second_image));

        // reload page
        $date = date('Y-m-d');

        $directories = Storage::allDirectories(env("PHOTOS_DIR"));
        $array_of_photos = array();

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

        $postcards = array();

        foreach (Storage::allFiles(env("POSTCARD_TEMPLATES_FOLDER")) as $file) {
            array_push($postcards, Storage::url($file));
        }

        $email = "";
        if (auth()->id()) {
            $email = auth()->user()->email;
        }

        return view('postcard.show', compact('array_of_photos', 'date', 'postcards', 'email'))
            ->with('success', __("messages.success_postcard_generation"));
    }
}
