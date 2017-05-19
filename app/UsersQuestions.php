<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersQuestions extends Model
{
    protected $fillable = ['question_id', 'user_id', 'number_of_tries'];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function question()
    {
        return $this->hasOne(Question::class);
    }
}
