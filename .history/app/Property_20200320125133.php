<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use Searchable;
    
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
        return number_format($this->price ).' ETB';
    }
    public function propertyImage($path){
        return ($path != null) && file_exists('storage/'.$path) ? asset('storage/'.$path) : asset('img/not-found.jpg');
    }
}
