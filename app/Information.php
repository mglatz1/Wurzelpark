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
        return static::where('name', '1')->first();
    }

    public static function getByName($name)
    {
        return static::where('name', $name)->first();
    }

    public function getTitle()
    {
        return $this->translations()->where('locale', app()->getLocale())->first()->title;
    }

    public function getText()
    {
        return $this->translations()->where('locale', app()->getLocale())->first()->text;
    }

    public function getAudio()
    {
        return $this->translations()->where('locale', app()->getLocale())->first()->url_to_audio;
    }

    public function getVideo()
    {
        return $this->translations()->where('locale', app()->getLocale())->first()->url_to_video;
    }

    public function getPdf()
    {
        return $this->translations()->where('locale', app()->getLocale())->first()->url_to_pdf;
    }

    public function getYouTubeVideo()
    {
        return $this->translations()->where('locale', app()->getLocale())->first()->url_to_youtube;
    }


}
