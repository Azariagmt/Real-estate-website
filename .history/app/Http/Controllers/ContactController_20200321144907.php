<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Phone;

class ContactController extends Controller
{
    public function getContactForm(){
        $phones = Phone::all();
        return view('contact');
    }
}


