<?php


namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mailing extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;

    public $message;

    public $recipient;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $recipient, $message)
    {
        $this->subject = $subject;
        $this->message = $message;
        $this->recipient = $recipient;
    }
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject($this->subject)
            ->to($this->recipient)
            ->html($this->message, 'text/html');
    }
}