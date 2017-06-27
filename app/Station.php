<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    public function translations()
    {
        return $this->hasMany(StationsTranslations::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function getDisplayName()
    {
        return $this->translations()->where('locale', app()->getLocale())->first()->display_name;
    }
}
