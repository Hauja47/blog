<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }

    public function store()
    {
        $attributes = request()->validate([
        //    'username' => 'required|exists:users,username',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credetials could not be verified.',
                // 'password' => 'Your provided credetials could not be verified.'
            ]);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome back!');
    }

    public function create()
    {
        return view('sessions.create');
    }
}
