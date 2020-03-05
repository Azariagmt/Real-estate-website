<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PropertyController extends Controller
{
    public function getPropertiesPage(){
        $properties = Property::inRandomOrder()->take(8)->get();

        return view('properties',
    [
        'properties' => $properties
    ]);
    }

    public function getSelectedPropertiesPage($slug){
        $property =Property::where('slug', $slug)->firstOrFail();

        return view('property',[
            'property'=> $property
        ]);
    }
}
