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

        if (count($frage) == 0) {
            $error_message = 'Kein Element gefunden.';
            return view('error', compact('error_message'));
        }
        $frage_item = $frage[0]; // todo: richtige frage holen!!
        $score = 0;

        if ($frage_item->richtigeantwort != request(['antwort'])['antwort'])
            $score = 1;

        QuizwegUserFrage::create([
            'user_id' => auth()->id(),
            'station' => request(['station'])['station'],
            'quizweg_fragen_id' => request(['frageid'])['frageid'],
            'gegebeneantwort' => request(['antwort'])['antwort'],
            'score' => $score]);

        if ($score == 0) // falsche antwort gegeben - nochmals die gleiche frage
            return back();
    }
}
