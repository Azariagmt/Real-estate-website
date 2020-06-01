<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Location;
use App\Status;
use App\Type;
use App\Provide;
use App\Phone;
use App\Social;
use App\Logo;
use App\Seo;

class HomeController extends Controller
{
    public function getIndex(){
        $logo = Logo::all();
$seo= Seo::all()
             $propertiesForHeader =Property::where('featured', true)->take(3)->inRandomOrder()->get();
             $properties =Property::where('featured', true)->take(4)->inRandomOrder()->get();
            $location =Location::all();
            $status = Status::all();
            $type = Type::all();
            $provides = Provide::all();
            $phones = Phone::all();
            $social =Social::all();
        return view('index',[
            'logo'=> $logo,

            'social'=>$social,
            'phones' => $phones,
            'provides'=>$provides,
            'status'=>$status,
            'type'=>$type,
            'propertiesForHeader'=>$propertiesForHeader,
            'properties'=>$properties,
            'location'=>$location
        ]);
    }
    public function pagenotFound(){
        return view('not-found');
    }
}
