<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizwegUserFrage extends Model
{
    protected $table = "quizweg_user_frage";

    protected $fillable = array('user_id', 'station', 'quizweg_fragen_id', 'gegebeneantwort', 'score');
}
