<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;


class UserController extends Controller
{
    // Show register Form
    public function register()
    {
        // dd('zarp');
        return view('user.register');
    }

    public function store(Request $request)
    {
        $formfields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|min:6|confirmed',
        ]);
        // $formfields['password'] = bycrpt($formfields['password']);
        $user = User::create($formfields);
        auth()->login($user);
        return redirect('/')->with('message', 'user created');
    }
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'You have been logout');
    }
    public function login()
    {
        return view('user.login');
    }

    public function auth(Request $request)
    {
        $formfields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);
        if (auth()->attempt($formfields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You are logged in ');
        }
        return back()->withErrors('message', 'invalid email or password');
    }
}