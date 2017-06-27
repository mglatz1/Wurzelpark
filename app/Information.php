<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    public function translations()
    {
        return $this->hasMany(InformationTranslations::class);
    }

    public static function getInfo()
    {
        return static::where('name', '1')->first()->translations()->where('locale', app()->getLocale())->first();
    }

    public static function getByName($name)
    {
        return static::where('name', $name)->first()->translations()->where('locale', app()->getLocale())->first();
    }
}
