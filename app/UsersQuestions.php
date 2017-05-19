<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersQuestions extends Model
{
    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function question()
    {
        return $this->hasOne(Question::class);
    }
}
