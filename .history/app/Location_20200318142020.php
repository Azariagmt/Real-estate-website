<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    protected $table = 'category';

    public function properties()
    {
        return $this->belongsToMany('App\Property');
    }
}
