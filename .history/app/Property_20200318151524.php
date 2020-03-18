<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function properties(){
        return $this->belongsToMany('App\Property');
    }
    public function presentPrice(){
        return number_format($this->price ,2).' ETB';
    }
}
