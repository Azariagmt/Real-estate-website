<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PropertyController extends Controller
{
    public function getPropertiesPage(){
        if(request()->location){
            $properties = Property::with('locations')->whereHas('locations', function($query){
                $query->where('slug', request()->location);
            })->get();
            $locations = Location::all();
            $categoryName= $locations->where('slug', $request()->)
        }else if(request()->status){
            $properties = Property::with('statuses')->whereHas('statuses', function($query){
                $query->where('slug', request()->status);
            })->get();
        }else if(request()->type){
            $properties = Property::with('types')->whereHas('types', function($query){
                $query->where('slug', request()->type);
            })->get();
        }else{
            $properties = Property::all();
        }

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
