<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function sendMail(){
        function () {
   
            $details = [
                'title' => 'Mail from ItSolutionStuff.com',
                'body' => 'This is for testing email using smtp'
            ];
           
            \Mail::to('yenebet12@gmail.com')->send(new \App\Mail\MyTestMail($details));
           
            dd("Email is Sent.");
        
    }
}
