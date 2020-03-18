<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $guarded = [];

    protected $table = 'location';

    public function properties()
    {
        return $this->belongsToMany('App\Property');
    }
}
