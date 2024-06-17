<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => ['required', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', Password::min(8)->letters()->numbers()->mixedCase()->symbols()->uncompromised()],
            'confirm_password' => ['required', 'same:password']
        ]); // validation

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/')->with('success', 'Account created successfully');
    }

    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'password' => 'required'
        ]); // validation   

        $user = User::where('email', $request->user)
                        ->orWhere('username', $request->user)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect('/login')->with('error', 'Invalid credentials');
        }

        $request->session()->put('user', $user);
        return redirect('/home')->with('success', 'Login successful');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect('/login')->with('success', 'Logout successful');
    }
}
