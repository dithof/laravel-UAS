<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:30'
        ]);

        if (Auth::attempt($credentials)) {
            // Jika berhasil login, redirect ke halaman home
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        // Jika gagal login, kembali ke halaman login dengan pesan error
        return back()->with('loginError', 'Login failed!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'You have been logged out!');
    }

}