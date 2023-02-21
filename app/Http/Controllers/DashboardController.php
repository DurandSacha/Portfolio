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

    public function mailing()
    {
        $lists = Lists::get();
        return view('dashboard.mailing', [
            "lists" => $lists,
        ]);
    }

    public function stats()
    {
        return view('dashboard.stats');
    }
}
