<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function translations()
    {
        return $this->hasMany(LevelsTranslations::class);
    }

    public function getDescription()
    {
        return $this->translations()->where('locale', app()->getLocale())->first()->description;
    }
}
