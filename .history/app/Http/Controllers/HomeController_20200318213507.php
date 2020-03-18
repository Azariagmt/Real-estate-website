<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Location;
use App\Status;
use App\Type;

class HomeController extends Controller
{


    public function getIndex(){
             $propertiesForHeader =Property::where('featured', true)->take(3)->inRandomOrder()->get();
             $properties =Property::where('featured', true)->take(8)->inRandomOrder()->get();
            $location =Location::all();
            $status = Status::all();
            $type = Type::all();
        return view('index',[
            'status'=>$status,
            'type'=>$type,
            'propertiesF'
            'properties'=>$properties,
            'location'=>$location
        ]);
    }
    public function pagenotFound(){
        return view('not-found');
    }
}
