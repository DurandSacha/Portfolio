<?php 

namespace App\Mail;

use Illuminate\Mail\Mailable;
//use Illuminate\Bus\Queueable;
//use Illuminate\Contracts\Queue\ShouldQueue;
//use Illuminate\Queue\SerializesModels;

class Envelope extends Mailable
{
    //use Queueable, SerializesModels;

    public $subject;
    public $message;

    public function __construct($subject, $message)
    {
        $this->subject = json_encode($subject);
        $this->message = json_encode($message);
    }

    public function build()
    {
        return $this->subject($this->subject)->view('mail.envelope')->with('message', $this->message);
    }
}