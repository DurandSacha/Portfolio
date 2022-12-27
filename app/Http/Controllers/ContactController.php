<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailables\Envelope;

class ContactController extends Controller
{
    public function send(){

        $message = [
            "title" => "Portfolio mail",
            "body" => "Contenu"
        ];

        Mail::to('sacha6623@gmail.com')
            ->send(new \App\Mail\ContactMail($message));
        return redirect()->back()->with('message', 'Message envoyé !');
    }
}
