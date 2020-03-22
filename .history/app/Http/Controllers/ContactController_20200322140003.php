<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;
use App\About;
use App\Social;

class ContactController extends Controller
{
    public function getContactForm(){
        $phones = Phone::first();
        $aboutsNoCollection =About::first();
        $social = Social::all();
        return view('contact',[
            'aboutsNoCollection'=>$aboutsNoCollection,
            'social'=>$social,
            'phones'=>$phones
        ]);
    }
}


