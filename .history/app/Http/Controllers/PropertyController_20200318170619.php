<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Status;
use App\Location;

class PropertyController extends Controller
{
    public function getPropertiesPage(){
        if(request()->location){
            // $properties = Property::with('locations')->whereHas('locations', function($query){
            //     $query->where('slug', request()->location);
            // })->get();
            $locations = Location::all();
            $categoryName= $locations->where('slug', request()->location)->first()->name;
        }else if(request()->status){
            // $properties = Property::with('statuses')->whereHas('statuses', function($query){
            //     $query->where('slug', request()->status);
            // })->get();
            $properties = Property::with('statuses')->whereHas('statuses', function($query){
                $query->where('slug', request()->status);
            })->get();
            $statuses = Status::all();
            $categoryName= $statuses->where('slug', request()->status)->first()->name;

        }else if(request()->type){
            $properties = Property::with('types')->whereHas('types', function($query){
                $query->where('slug', request()->type);
            })->get();
            $types =Type::all();
            $categoryName= $types->where('slug', request()->type)->first()->name;

        }else{
            $properties = Property::all();
            $categoryName = 'All Properties';
        }

        if(request()->sort == 'low_high'){
            $properties =$properties->sortBy('price');
        }elseif(request()->sort =='high_low'){
            $properties =$properties->sortByDesc('price');
        }
         
        return view('properties',
    [
        'categoryName'=>$categoryName,
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
