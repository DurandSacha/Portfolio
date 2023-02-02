<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
//use Illuminate\Mail\Mailables\Envelope;
use App\Mail\Envelope;


class MailController extends Controller
{
    public function __construct(){
        //$smtp = null;
    }

    public function sendEmails(Request $request){
        // receive mailing form
        $request->validate([
            'recipients' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'mode' => 'required'
        ]);
    
        $recipients = $request->input('recipients');
        $subject = json_encode($request->input('subject'));
        $message = json_encode($request->input('message'));
        $mode = $request->input('mode');

        //dd($message);

        $recipient_emails = preg_split("/[\s,]+/", $recipients);
    
        foreach ($recipient_emails as $recipient) {
            //Mail::to($recipient)->send(new EmailSender($subject, $message, $mode));
        
            Mail::to($recipient)->send(new Envelope($subject, $message ));
        }
    
        return redirect()->back()->with('message', 'Email envoyé avec succès');
    }
}
