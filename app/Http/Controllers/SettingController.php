<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lists;

class SettingController extends Controller
{
    public function index()
    {
        return view('dashboard.setting');
    }
}
