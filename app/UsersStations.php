<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersStations extends Model
{
    protected $fillable = ['user_id', 'station_id'];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function station()
    {
        return $this->hasOne(Station::class);
    }
}
