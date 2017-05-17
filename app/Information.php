<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    public static function getInfo()
    {
        return static::where('name', '1')->get()[0];
    }

    public static function getByName($name)
    {
        return static::where('name', $name)->get();
    }
}
