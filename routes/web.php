<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ListController;

Route::get('/', [HomeController::class, 'show']);
Route::post('/', [HomeController::class, 'show']);
Route::post('/contact', 'ContactController@send')->name('contact.send');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/checkLogin', [AuthController::class, 'login'])->name('checkLogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/unsubscribe/{mail}', [MailController::class, 'unsubscribe'])->name('unsubscribe');

/** dashboard **/
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'welcome'])->name('dashboard.welcome');
    Route::get('/mailing', [DashboardController::class, 'mailing'])->name('dashboard.mailing');
    Route::get('/stats', [DashboardController::class, 'stats'])->name('dashboard.stats');

    Route::post('/sendEmails', [MailController::class, 'sendEmails'])->name('dashboard.sendEmails');

    Route::post('/list/edit', [ListController::class, 'update'])->name('lists.edit');
    Route::post('/list/store', [ListController::class, 'store'])->name('lists.store');

});
