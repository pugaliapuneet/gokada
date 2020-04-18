<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Waypoint extends Model
{
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
    
    public function recipient()
    {
        return $this->belongsTo('App\Recipient');
    }
    
    public function status()
    {
        return $this->belongsTo('App\WaypointStatus');
    }
}
