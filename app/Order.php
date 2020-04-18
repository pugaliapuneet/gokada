<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function waypoints()
    {
        return $this->hasMany('App\Waypoint');
    }

    public function driver()
    {
        return $this->belongsTo('App\Driver');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function status()
    {
        return $this->belongsTo('App\OrderStatus');
    }
}
