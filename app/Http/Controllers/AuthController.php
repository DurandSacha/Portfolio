<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    //use AuthenticatesUsers;

    protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        Auth::logout();
        Auth::logoutOtherDevices($request->password);
        $request->session()->invalidate();
        if (Auth::attempt($credentials)) {
            return redirect($this->redirectTo);
        }

        return back()->withErrors(['error' => 'Email or password is incorrect']);
    }

    protected function authenticated(Request $request, $user)
    {
        var_dump('authenticated');
    }

    protected function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}