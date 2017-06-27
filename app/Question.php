<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function translations()
    {
        return $this->hasMany(QuestionsTranslations::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function station()
    {
        return $this->belongsTo(Station::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function getText()
    {
        return $this->translations()->where('locale', app()->getLocale())->first()->text;
    }

    public function getAudio()
    {
        return $this->translations()->where('locale', app()->getLocale())->first()->url_to_audio;
    }
}
