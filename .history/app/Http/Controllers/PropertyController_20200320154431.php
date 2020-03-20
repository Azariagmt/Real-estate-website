<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Status;
use App\Location;
use App\Type;
use App\Phone;
use Paginate;

class PropertyController extends Controller
{
    public function getPropertiesPage(){

        
        if(request()->location){
            // $properties = Property::with('locations')->whereHas('locations', function($query){
            //     $query->where('slug', request()->location);
            // })->get();
            $properties = Property::with('locations')->whereHas('locations', function($query){
                $query->where('slug', request()->location);
            });
            $locations = Location::all();
            $categoryName= optional($locations->where('slug', request()->location)->first())->name;
        }else if(request()->status){
            // $properties = Property::with('statuses')->whereHas('statuses', function($query){
            //     $query->where('slug', request()->status);
            // })->get();
            $properties = Property::with('statuses')->whereHas('statuses', function($query){
                $query->where('slug', request()->status);
            });
            $statuses = Status::all();
            $categoryName= optional($statuses->where('slug', request()->status)->first())->name;

        }else if(request()->type){
            $properties = Property::with('types')->whereHas('types', function($query){
                $query->where('slug', request()->type);
            });
            $types =Type::all();
            $categoryName= optional($types->where('slug', request()->type)->first())->name;

        }else{
            $properties = Property::take(12);
            $categoryName = 'All Properties';
        }

        if(request()->sort == 'low_high'){
            $properties =$properties->orderBy('price')->paginate(9);
            $categoryName ='price (low to high)';
        }elseif(request()->sort =='high_low'){
            $properties =$properties->orderBy('price', 'desc')->paginate(9);
            $categoryName ='price (high to low)';
        }else{
            $properties =$properties->paginate(9);
        }
       
        $location =Location::all();
        $status = Status::all();
        $type = Type::all();
        $phones = Phone::all();
        return view('properties',
    [   'phones'=>
        'status'=>$status,
        'type'=>$type,
        'location'=>$location,
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
