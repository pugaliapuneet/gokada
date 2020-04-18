<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    public function waypoints()
    {
        return $this->hasMany('App\Waypoint');
    }

    public function orders()
    {
        return $this->hasManyThrough('App\Order', 'App\Waypoint');
    }
}
