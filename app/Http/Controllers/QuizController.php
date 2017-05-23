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

        if(sizeof($station) == 0)
        {
            return redirect()->home()->with('error', "Diese Station existiert nicht.");
        }

        // check if user has already finished this station
        $finished = UsersStations::where('user_id', auth()->id())
            ->where('station_id', $station->id)->get();

        // user already finished this station
        if (sizeof($finished) != 0)
        {
            $question = $station->questions->where('number', 1)->where('level', 1)->first();
            $hide_next_button = false;
            $hide_previous_button = true;

            if (sizeof($this->getNextQuestion($station->id, 1, 1)) == 0)
            {
                $hide_next_button = true;
            }
            return view('quiz.show-finalized', compact(['question'], ['hide_previous_button'], ['hide_next_button'] ))
                ->with('success', "Du hast bereits alle Fragen dieser Station richtig beantwortet.");
        }

        $users_questions = UsersQuestions::where('user_id', auth()->id())->first();
        $wrong_answers = [];

        // no answers for this station and user found - start quiz from scratch
        if (sizeof($users_questions) == 0)
        {
            $question = $station->questions->where('number', 1)->where('level', 1)->first();
            return view('quiz.show', compact(['question', 'wrong_answers']));
        }

        $max_level_count = $station->questions->max('level');

        // go through all levels
        for ($level = 1; $level <= $max_level_count; $level++)
        {
            $questions_of_levels = $station->questions->where('level', $level);
            $number_of_questions_of_level = $questions_of_levels->count();

            // go through all questions of a level
            for ($number = 1; $number <= $number_of_questions_of_level; $number++) {
                $question = $questions_of_levels->where('number', $number)->first();

                // check all questions if they are answered. if no ==> show the question
                if ($users_questions->where('question_id', $question->id)->count() == 0)
                {
                    return view('quiz.show', compact(['question', 'wrong_answers']));
                }
            }
        }
    }

    public function store()
    {
        // check correctness of answer
        $station_id = request('station');
        $current_question = Question::where('station_id', $station_id)->
            where('number', request('question_number'))->
            where('level', request('level'))->first();
        $question_id = $current_question->id;

        $answer_id = Answer::where('question_id', $question_id)->where('correct', true)->first()->id;
        $users_questions = UsersQuestions::where('question_id', $question_id)->where('user_id', auth()->id())->first();

        // wrong answer - repeat quiz with same question
        if (request('answer') != $answer_id)
        {
            $question = $current_question;
            $wrong_answers = array_merge(unserialize(request('encoded_wrong_answers')), [request('answer')]);
            return view('quiz.show', compact(['question', 'wrong_answers']))
                ->with('error', 'Diese Antwort ist leider falsch, versuche es noch einmal.');
        }
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

                UsersQuestions::create([
                    'question_id' => $question_id,
                    'user_id' => auth()->id(),
                    'number_of_tries' => sizeof(array_merge(unserialize(request('encoded_wrong_answers')))) + 1
                ]);

                return redirect()->home()->with('success', "Gratuliere! Du hast alle Fragen richtig beantwortet. ".
                "Gehe nun weiter zur nächsten Station.");
            }
        }
        $wrong_answers = [];

        UsersQuestions::create([
            'question_id' => $question_id,
            'user_id' => auth()->id(),
            'number_of_tries' => sizeof(array_merge(unserialize(request('encoded_wrong_answers')))) + 1
        ]);

        return view('quiz.show', compact('question', 'wrong_answers'))
            ->with('success', "Diese Antwort ist richtig. Weiter geht es mit der nächsten Frage.");
    }

    public function show_next_finalized()
    {
        $hide_next_button = false;
        $hide_previous_button = false;
        $station_id = request('station');
        $current_level = request('level');
        $current_number = request('question_number');

        $question = $this->getNextQuestion($station_id, $current_level, $current_number);

        if (sizeof($this->getNextQuestion($station_id, $question->level, $question->number)) == 0)
        {
            $hide_next_button = true;
        }
        return view('quiz.show-finalized', compact(['question'], ['hide_previous_button'], ['hide_next_button'] ))
            ->with('success', "Du hast bereits alle Fragen dieser Station richtig beantwortet.");
    }

    public function show_previous_finalized()
    {
        $hide_next_button = false;
        $hide_previous_button = false;
        $station_id = request('station');
        $current_level = request('level');
        $current_number = request('question_number');

        $question = $this->getPreviousQuestion($station_id, $current_level, $current_number);

        if (sizeof($this->getPreviousQuestion($station_id, $question->level, $question->number)) == 0)
        {
            $hide_previous_button = true;
        }
        return view('quiz.show-finalized', compact(['question'], ['hide_previous_button'], ['hide_next_button'] ))
            ->with('success', "Du hast bereits alle Fragen dieser Station richtig beantwortet.");
    }

    private function getNextQuestion($station_id, $level, $number)
    {
        $station = Station::find($station_id);

        $next_possible_question = $station->questions()
            ->where('level', $level)
            ->where('number', $number + 1)->first();

        if (sizeof($next_possible_question) == 0)
        {
            $next_possible_question = $station->questions()
                ->where('level', $level + 1)
                ->where('number', 1)->first();

            if (sizeof($next_possible_question) == 0)
            {
                return null;
            }
        }
        return $next_possible_question;
    }

    private function getPreviousQuestion($station_id, $level, $number)
    {
        $station = Station::find($station_id);

        $previous_possible_question = $station->questions
            ->where('level', $level)
            ->where('number', $number - 1)->first();

        if (sizeof($previous_possible_question) == 0)
        {
            $previous_possible_questions = $station->questions
                ->where('level', $level - 1);

            $size = sizeof($previous_possible_questions);

            if ($size == 0)
            {
                return null;
            }

            $max_number_count = $previous_possible_questions->max('number');
            return $previous_possible_questions->where('number', $max_number_count)->first();
        }
        return $previous_possible_question;
    }
}
