<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getContactForm(){
        $phones = Phone::all();
        return view('contact');
    }
}


