<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
//use Illuminate\Mail\Mailables\Envelope;
use App\Mail\Mailing;
use App\Jobs\SendMailJob;


class MailController extends Controller
{
    public function __construct(){
    }

    public function sendEmails(Request $request){
        // receive mailing form
        $request->validate([
            'subject' => 'required',
            'message' => 'required',
            'mode' => 'required'
        ]);
    
        $recipients = $request->input('recipients');
        $subject = $request->input('subject'); //  ⚡
        $message = $request->input('message');
        $mode = $request->input('mode');

        $recipient_emails = preg_split("/[\s|,]+/", $recipients);
    
        foreach ($recipient_emails as $recipient) {
            dispatch(new SendMailJob($subject, $recipient, $message));
        }
    
        return redirect()->back()->with('message', count($recipient_emails).' email(s) envoyé avec succès (dans la file d\'attente)');
    }
}
