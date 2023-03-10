<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lists;

class DashboardController extends Controller
{
    public function welcome()
    {
        return view('dashboard.welcome');
    }
}
