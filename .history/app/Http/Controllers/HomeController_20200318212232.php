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
             $properties =Property::all();
            $location =Location::all();
            $status = Status::all();
            $type = Type::all();
        return view('index',[
            'status'=>$status,
            'type'=>$type,
            'properties'=>$properties,
            'location'=>$location
        ]);
    }
    public function pagenotFound(){
        return view('not-found');
    }
}
