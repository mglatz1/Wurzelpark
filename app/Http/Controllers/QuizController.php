<?php

namespace App\Http\Controllers;

use App\Question;
use App\UsersQuestions;
use App\UsersStations;
use App\Station;
use App\Answer;

class QuizController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($station_name)
    {
        $station = Station::where('name', $station_name)->first();

        // check if user already finished station
        $finished = UsersStations::where('user_id', auth()->id())
            ->where('station_id', $station->id)->get();

        // station has already finished station
        if (sizeof($finished) != 0)
        {
            // todo: show questions but do not provide possibility to answer
            return redirect()->home()->with('status', "Du hast bereits alle Fragen richtig beantwortet. ".
                "Gehe nun weiter zur nächsten Station.");
        }
        $question = $station->questions->where('number', 1)->where('level', 1)->first(); // todo: find correct question not the first
        return view('quiz.show', compact('question'));
    }

    public function store()
    {
        // check correctness of answer
        $station_id = Station::find(request('station'))->id;
        $current_question = Question::where('station_id', $station_id)->
            where('number', request('question_number'))->
            where('level', request('level'))->first();
        $question_id = $current_question->id;

        $answer_id = Answer::where('question_id', $question_id)->where('correct', true)->first()->id;
        $users_questions = UsersQuestions::where('question_id', $question_id)->where('user_id', auth()->id())->first();

        if (sizeof($users_questions) == 0)
        {
            UsersQuestions::create([
                'question_id' => $question_id,
                'user_id' => auth()->id(),
                'number_of_tries' => 1
            ]);
        }
        else
        {
            $users_questions->number_of_tries++;
            $users_questions->save();
        }

        // redirect
        if (request('answer') == $answer_id)
        {
            // fetch new question
            $question = Question::where('station_id', $station_id)->get()
                ->where('number', ($current_question->number + 1))
                ->where('level', ($current_question->level))->first();

            // all questions of this level completed
            if (sizeof($question) == 0)
            {
                $question = Question::where('station_id', $station_id)->get()
                    ->where('number', 1)
                    ->where('level', ($current_question->level + 1))->first();

                // all questions of all levels completed - no more questions at this station
                if (sizeof($question) == 0)
                {
                    UsersStations::create([
                        'user_id' => auth()->id(),
                        'station_id' => $station_id
                    ]);

                    return redirect()->home()->with('status', "Du hast alle Fragen richtig beantwortet. ".
                    "Gehe nun weiter zur nächsten Station.");
                }
            }
            return view('quiz.show', compact('question'));
        }

        // repeat quiz with same question
        dd("falsche antwort");
        return back()->with('error', "Diese Antwort ist leider falsch, probiere es noch einmal.");
    }
}
