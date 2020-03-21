<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Status;
use App\Location;
use App\Type;
use App\Phone;
use App\About;
use App\Employee;

class AboutPageController extends Controller
{
    public function getAboutPage(){
        $employees= Employee::all();
        $location =Location::all();
        $status = Status::all();
        $type = Type::all();
        $phones = Phone::all();
        $abouts = About::all();

        return view('about',[
            
            'employees' =>$employees,
            'phones'=>$phones,
            'status'=>$status,
            'type'=>$type,
            'location'=>$location,
        ]);
    }
}
