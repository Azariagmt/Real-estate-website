<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PropertyController extends Controller
{
    public function getPropertiesPage(){
        if(request()->location){
            $properties = Property::with('locations')->whereHas('locations', function($query))
        }else if(request()->status){

        }else if(request()->type){

        }
        $properties = Property::all();

        if(request()->sort == 'low_high'){
            $properties =$properties->sortBy('price');
        }elseif(request()->sort =='high_low'){
            $properties =$properties->sortByDesc('price');
        }
         
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

    public function getSellingPage(){
        return view('selling');
    }
}
