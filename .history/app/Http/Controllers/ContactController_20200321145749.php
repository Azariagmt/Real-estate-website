<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;
use App\About;

class ContactController extends Controller
{
    public function getContactForm(){
        $phones = Phone::first();
        return view('contact',[
            'phones'=>$phones
        ]);
    }
}


