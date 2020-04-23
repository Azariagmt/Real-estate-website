<?php

namespace App\Http\Controllers;

class SocialController extends Controller
{
    public function sendMail()
    {

        $details = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp',
        ];

        \Mail::to('yenebet12@gmail.com')->send(new \App\Mail\MyTestMail($details));

        dd("Email is Sent.");

    }
}
