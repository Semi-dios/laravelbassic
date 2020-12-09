<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

/* use Illuminate\Http\Request; */

class MessageController extends Controller
{
    public function store() {
       $message=  request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'case' => 'required',
            'content' => 'required',
         ]
        );


        Mail::to('meridianogrupo@gmail.com')->queue(new MessageReceived($message));

        return 'Message sent';

    }
}
