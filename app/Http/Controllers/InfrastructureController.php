<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
use App\Mail\Mailing;
use App\Mails;
use App\Lists;
use App\Jobs\SendMailJob;


class InfrastructureController extends Controller
{
    public function __construct(){
    }

    public function index()
    {
        return view('dashboard.infrastructure', [
        ]);
    }
}
