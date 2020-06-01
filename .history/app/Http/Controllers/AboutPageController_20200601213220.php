<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Status;
use App\Location;
use App\Type;
use App\Phone;
use App\About;
use App\Social;
use App\Employee;
use App\Logo;
use App\Seo;

class AboutPageController extends Controller
{
    public function getAboutPage(){
        $employees= Employee::all();
        $location =Location::all();
        $status = Status::all();
        $type = Type::all();
        $phones = Phone::all();
        $abouts = About::all();
        $aboutsNoCollection =About::first();
        $social = Social::all();
        $logo = Logo::all();
        $seo= Seo::all();

        return view('about',[
            'aboutsNoCollection'=>$aboutsNoCollection,
            'social'=>$social,
            'abouts'=>$abouts,
            'employees' =>$employees,
            'phones'=>$phones,
            'status'=>$status,
            'type'=>$type,
            'location'=>$location,
            'seo'=>$seo,
            'logo'=>
        ]);
    }
}
