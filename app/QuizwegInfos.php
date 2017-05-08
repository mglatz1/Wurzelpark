<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizwegInfos extends Model
{
    public static function getInfo()
    {
        return static::where('id', '2')->get()[0];
    }

    public static function getByQrCode($qrcode)
    {
        return static::where('qrcode', $qrcode)->get();
    }
}
