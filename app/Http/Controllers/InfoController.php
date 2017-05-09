<?php

namespace App\Http\Controllers;

use App\QuizwegInfos;

class InfoController extends Controller
{
    public function index()
    {
        $about_info = QuizwegInfos::getInfo();
        return view('info.info', compact('about_info'));
    }

    public function show($qrcode)
    {
        $info = QuizwegInfos::getByQrCode($qrcode);

        if (count($info) == 0) {
            $error_message = 'Kein Element gefunden.';
            return view('error', compact('error_message'));
        }
        $info_item = $info[0];
        return view('info.show', compact('info_item'));
    }
}
