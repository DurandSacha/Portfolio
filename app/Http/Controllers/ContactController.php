<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(){
        return redirect()->back()->with('message', 'OK!');
    }
}
