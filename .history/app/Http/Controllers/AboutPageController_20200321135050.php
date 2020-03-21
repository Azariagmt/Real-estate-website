<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Status;
use App\Location;
use App\Type;
use App\Phone;

class AboutPageController extends Controller
{
    public function getAboutPage(){
        return view('about');
    }
}
