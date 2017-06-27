<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function translations()
    {
        return $this->hasMany(AnswersTranslations::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function getText()
    {
        return $this->translations()->where('locale', app()->getLocale())->first()->text;
    }
}
