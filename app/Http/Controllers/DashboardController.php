<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function welcome()
    {
        return view('dashboard.welcome');
    }

    public function mailing()
    {
        return view('dashboard.mailing');
    }

    public function stats()
    {
        return view('dashboard.stats');
    }
}
