<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Location;

class HomeController extends Controller
{


    public function getIndex(){
        $property =Property::inRandomOrder()->take(12)->get();
            $locatio
        return view('index');
    }
    public function pagenotFound(){
        return view('not-found');
    }
}
