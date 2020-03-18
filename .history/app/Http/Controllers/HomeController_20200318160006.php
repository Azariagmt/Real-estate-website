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
        $property =Property::inRandomOrder()->take(12)->get();
            $location =Location::all();
            $status = Status::all();
            $type = Type::all();
        return view('index',[
            'status'
            'property'=>$property,
            'location'=>$location
        ]);
    }
    public function pagenotFound(){
        return view('not-found');
    }
}
