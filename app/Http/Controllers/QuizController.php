<?php

namespace App\Http\Controllers;

use App\QuizwegFrage;
use App\QuizwegUserFrage;

class QuizController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($qrcode)
    {
        $frage = QuizwegFrage::getByQrCode($qrcode);

        if (count($frage) == 0) {
            $error_message = 'Kein Element gefunden.';
            return view('error', compact('error_message'));
        }
        $frage_item = $frage[0]; // achtung: dies ist nur die erste frage (1.level, 1. frage)

        return view('quiz.show', compact('frage_item'));
    }

    public function store()
    {
        $frage = QuizwegFrage::getByQrCode(request(['station']));
        $frage_item = $frage[0]; // todo: richtige frage holen!!
        $score = 0;

        // check, ob richtige Antwort gegeben
        if ($frage_item->richtigeantwort == request(['gegebeneantwort'])['gegebeneantwort'])
            $score = 1;

        // erstelle Eintrag in User_Frage
        $auth_id_array = array("user_id" => auth()->id());
        $score_array = array("score" => $score);
        $data = array_merge($auth_id_array, request(['station', 'quizweg_fragen_id', 'gegebeneantwort']), $score_array);
        QuizwegUserFrage::create($data);

        // falsche antwort gegeben - nochmals die gleiche Frage
        if ($score == 0) {
            $frage_item[request(['gegebeneantwort'])['gegebeneantwort']] = "wrong";
            dd($frage_item);
            return view('quiz.show', compact('frage_item'));
        }

        // weiter zur nächsten Frage
    }
}
