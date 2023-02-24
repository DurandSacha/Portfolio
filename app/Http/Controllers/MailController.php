<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
//use Illuminate\Mail\Mailables\Envelope;
use App\Mail\Mailing;
use App\Mails;
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
        $list_id = $request->input('addList');
        $sent_to = $request->input('sendToList');
        
        $recipient_emails = preg_split("/[\s|,]+/", $recipients);

        if($sent_to != 'null'){
            $recipient_emails = Mails::where('list_id',$sent_to)->get();
        }

        $nb_mail_send = count($recipient_emails);
        foreach ($recipient_emails as $recipient) {
            $recipient = trim($recipient);
            $mail = Mails::firstOrNew([
                'email'=> $recipient,
            ]);
            $mail->last_send = now();

            
            if($list_id != 'null'){
                $mail->list_id = $list_id;
            }
            $mail->save();

            if($mail->blacklisted == false){
                dispatch(new SendMailJob($subject, $recipient, $message))->onQueue('emails');
            }
            else{
                $nb_mail_send = $nb_mail_send - 1 ;
            }
        }
    
        return redirect()->back()->with('message', $nb_mail_send.' email(s) envoyé avec succès (dans la file d\'attente)');
    }

    public function unsubscribe($email){
        $mail = Mails::where('email', '=', $email)->first();
        $mail->blacklisted = true;
        $mail->save();

        return view('mail.unsubscribe', [
        ]);
    }
}
