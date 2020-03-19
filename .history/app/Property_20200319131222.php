<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function locations(){
        return $this->belongsToMany('App\Location');
    }
    public function statuses(){
        return $this->belongsToMany('App\Status');
    }
    public function types(){
        return $this->belongsToMany('App\Type');
    }
    public function presentPrice(){
        return number_format($this->price ,2).' ETB';
    }
    public function propertyImage(){
        
    }
}
