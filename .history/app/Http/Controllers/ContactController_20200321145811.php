<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;
use App\About;

class ContactController extends Controller
{
    public function getContactForm(){
        $phones = Phone::first();
        $aboutsNoCollection =About::first();
        return view('contact',[
            'aboutsNoCollection'=>$aboutsNoCollection,
            'phones'=>$phones
        ]);
    }
}


