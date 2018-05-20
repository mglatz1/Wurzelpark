<?php

namespace App\Http\Controllers;

use App\Http\Utils\Utils;
use App\Jobs\GenerateSendPostcard;
use Illuminate\Support\Facades\Storage;
use function Symfony\Component\VarDumper\Tests\Caster\reflectionParameterFixture;

class PostcardController extends Controller
{
    public function show($date = null)
    {
        $max_photos_to_load = env("PHOTOS_TO_RELOAD_INITIAL_VALUE");

        Utils::Instance()->resetLocale(request()->server('HTTP_ACCEPT_LANGUAGE'));
        $directories = Storage::allDirectories(env("PHOTOS_DIR"));
        $finished = 1;
        $page = 1;

        if ($date == NULL || $date == '')
        {
            $date = date('Y-m-d');
        }

        $array_of_photos = $this->retrieve_photos($directories, $date, $max_photos_to_load, $finished);
        $postcards = $this->retrieve_postcards(env("POSTCARD_TEMPLATES_FOLDER"));
        $email = $this->retrieve_email();

        return view('postcard.show', compact('array_of_photos', 'date', 'postcards', 'email', 'page', 'finished'));
    }

    public function store()
    {
        $max_photos_to_load = env("PHOTOS_TO_RELOAD_INITIAL_VALUE");
        $finished = 1;
        $page = 1;

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
        $date = request('selecteddate');
        $directories = Storage::allDirectories(env("PHOTOS_DIR"));

        $array_of_photos = $this->retrieve_photos($directories, $date, $max_photos_to_load, $finished);
        $postcards = $this->retrieve_postcards(env("POSTCARD_TEMPLATES_FOLDER"));

        $email = $this->retrieve_email();

        return view('postcard.show', compact('array_of_photos', 'date', 'postcards', 'email', 'page', 'finished'))
            ->with('success', __("messages.success_postcard_generation"));
    }

    public function load_images()
    {
        $page = request('page');
        $date = request('date');

        $directories = Storage::allDirectories(env("PHOTOS_DIR"));
        $max_photos_to_load = env("PHOTOS_TO_RELOAD_INITIAL_VALUE");

        $array_of_photos = array();
        $finished = 1;

        foreach ($directories as $directory)
        {
            if (strcmp(basename($directory), $date) != 0)
            {
                continue;
            }

            $photo = array();
            $count = 0;

            foreach (Storage::allFiles($directory) as $file)
            {
                $count++;

                if ($count <= $page * $max_photos_to_load) {
                    continue;
                }

                // there are more files which were not sent already
                if ($count == $max_photos_to_load * ($page + 1) + 1) {
                    $finished = 0;
                    break;
                }

                $dimension = getimagesizefromstring(Storage::get($file));
                $photo[Storage::url($file)] = $dimension[0].'x'.$dimension[1];
            }
            $array_of_photos[basename($directory)] = $photo;
            break;
        }

        $page++;
        return response()->json(['photos' => $array_of_photos, 'page' => $page, 'finished' => $finished]);
    }

    private function retrieve_email()
    {
        $email = "";

        if (auth()->id()) {
            $email = auth()->user()->email;
        }

        return $email;
    }

    private function retrieve_postcards($postcard_directory)
    {
        $postcards = array();

        foreach (Storage::allFiles($postcard_directory) as $file) {
            array_push($postcards, Storage::url($file));
        }

        return $postcards;
    }

    private function retrieve_photos($directories, $date, $max_photos_to_load, &$finished)
    {
        $array_of_photos = array();

        foreach ($directories as $directory)
        {
            if (strcmp(basename($directory), $date) != 0)
            {
                continue;
            }

            $photo = array();
            $count = 1;
            foreach (Storage::allFiles($directory) as $file)
            {
                if ($count++ == $max_photos_to_load + 1) {
                    $finished = 0;
                    break;
                }

                $dimension = getimagesizefromstring(Storage::get($file));
                $photo[Storage::url($file)] = $dimension[0].'x'.$dimension[1];
            }
            $array_of_photos[basename($directory)] = $photo;
            break;
        }

        return $array_of_photos;
    }
}
