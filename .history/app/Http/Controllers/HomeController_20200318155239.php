<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Location;

class HomeController extends Controller
{


    public function getIndex(){
        $property =Property::inRandomOrder()->take(12)->get();
            $location =Location::all();
        return view('index',[
            'property'=>$property,
            'location'=>$property
        ]);
    }
    public function pagenotFound(){
        return view('not-found');
    }
}
