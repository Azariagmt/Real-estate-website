<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function properties(){
        return $this->belongsToMany('App\Property');
    }
}
