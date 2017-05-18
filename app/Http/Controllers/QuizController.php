<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Station;

class QuizController extends Controller
{
    public function show($station_name)
    {
        $station = Station::where('name', $station_name)->first();
        $question = $station->questions->where('number', 1)->where('level', 1)->first(); // todo: find correct question not the first
        return view('quiz.show', compact('question'));
    }

    public function store()
    {
        dd("hallo");
        return redirect()->home();
    }
}
