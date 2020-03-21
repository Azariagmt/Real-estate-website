<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Status;
use App\Location;
use App\Type;
use App\Phone;
use A

class AboutPageController extends Controller
{
    public function getAboutPage(){
        $location =Location::all();
        $status = Status::all();
        $type = Type::all();
        $phones = Phone::all();

        return view('about',[
            'phones'=>$phones,
            'status'=>$status,
            'type'=>$type,
            'location'=>$location,
        ]);
    }
}
