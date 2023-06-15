<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->forget('cart');
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|exists:users,username',
            'password' => 'required'
        ], ['username.exists' => 'Username tidak tersedia.']);

        // if success
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/dashboard')->with('success', 'Login Berhasil');
        }
        return redirect('/login')->with('warning', 'Username atau Password Salah.');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->forget('cart');
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
