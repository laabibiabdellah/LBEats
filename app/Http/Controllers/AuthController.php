<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginAuth(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            if (auth()->user()->role === 'admin' or auth()->user()->role === 'kitchen_worker' or auth()->user()->role === 'delivery_worker') {
                return to_route('admin.dashboard');
            } else {
                return to_route('home');
            }
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerAuth(Request $request)
    {

        $validCredetials = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $validCredetials['name'],
            'email' => $validCredetials['email'],
            'password' => Hash::make($validCredetials['password']),
        ]);

        Auth::login($user);

        return to_route('home')->with('success', 'Registration successful. You are now logged in.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login')->with('success', 'You have been logged out.');
    }
}
