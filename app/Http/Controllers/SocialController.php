<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lists;

class SocialController extends Controller
{
    public function index()
    {
        return view('dashboard.social');
    }
}
