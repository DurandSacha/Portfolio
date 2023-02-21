<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailing;
use Illuminate\Queue\SerializesModels;


class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $subject;
    protected $recipient;
    protected $message;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($subject, $recipient, $message)
    {
        $this->subject = $subject;
        $this->recipient = $recipient;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Redis::throttle('my-mailtrap')->allow(2)->every(1)->then(function () {
        Mail::to($this->recipient)->send(new Mailing($this->subject, $this->recipient, $this->message));
    }
}