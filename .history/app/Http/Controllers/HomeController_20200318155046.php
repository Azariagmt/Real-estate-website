<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Location;

class HomeController extends Controller
{
    $property =Property::inRandomOrder()->take(12)->firstOrFail();


    public function getIndex(){
        return view('index');
    }
    public function pagenotFound(){
        return view('not-found');
    }
}
