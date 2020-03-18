<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationProperty extends Model
{
    protected $table ='location_property';

    protected $fillable =['property_id', 'location_id'];
}
