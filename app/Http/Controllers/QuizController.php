<?php

namespace App\Http\Controllers;

use App\QuizwegFrage;

class QuizController extends Controller
{
    public function index()
    {
        $about_frage = QuizwegFrage::getFrage();
        return view('quiz.show', compact('about_frage'));
    }

    public function show($qrcode)
    {
        $frage = QuizwegFrage::getByQrCode($qrcode);

        if (count($frage) == 0) {
            $error_message = 'Kein Element gefunden.';
            return view('error', compact('error_message'));
        }
        $frage_item = $frage[0];
        return view('quiz.show', compact('frage_item'));
    }
}
