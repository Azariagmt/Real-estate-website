<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    protected $table ='property_type';
    protected $fillable =['property_id', 'location_id'];
}
