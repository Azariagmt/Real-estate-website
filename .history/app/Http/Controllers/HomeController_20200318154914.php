<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex(){
        
    }
    public function pagenotFound(){
        return view('not-found');
    }
}
