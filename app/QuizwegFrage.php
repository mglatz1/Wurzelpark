<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizwegFrage extends Model
{
    protected $table = "quizweg_fragen";

    public static function getByQrCode($qrcode)
    {
        return static::where('qrcode', $qrcode)->get();
    }
}
