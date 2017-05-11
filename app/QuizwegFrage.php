<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizwegFrage extends Model
{
    protected $table = "quizweg_frage";

    public static function getFrage()
    {
        return static::where('id', '135')->get()[0];
    }

    public static function getByQrCode($qrcode)
    {
        return static::where('qrcode', $qrcode)->get();
    }
}
