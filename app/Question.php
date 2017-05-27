<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
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
}
