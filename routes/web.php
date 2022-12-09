<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'show']);
Route::post('/contact', 'ContactController@send')->name('contact.send');
