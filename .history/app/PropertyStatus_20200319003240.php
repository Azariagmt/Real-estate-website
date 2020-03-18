<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyStatus extends Model
{
    protected $table ='property_status';
    protected $fillable =['property_id', 'location_id'];
}
