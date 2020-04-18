<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    //a driver can have many orders
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
    
    public function waypoints()
    {
        return $this->hasManyThrough('App\Waypoint', 'App\Order');
    }
}
