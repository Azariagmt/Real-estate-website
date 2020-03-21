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
        $location =Location::all();
        $status = Status::all();
        $type = Type::all();
        $phones = Phone::all();
        $property =Property::where('slug', $slug)->firstOrFail();

        return view('property',[
            'phones'=>$phones,
            'status'=>$status,
            'type'=>$type,
            'location'=>$location,
            'property'=> $property
        ]);
    }
}
