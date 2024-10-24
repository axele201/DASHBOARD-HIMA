<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        $request->validate([
            'user' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['user' => $request->user, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        }
        return redirect()->route('login')->with('error', 'Username atau password salah.');
    }

    public function logout(Request $request)
    {
        // Regenerate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Auth::logout();

        return redirect()->route('login');
    }
}

