<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function submit() 
    {
        validator(request()->all(), [
            'email' => ['required', 'email'],
            'password' => ['required']
        ])->validate();

        if (auth()->attempt(request()->only(['email','password']))) {
            return to_route('note.index');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid Credentials']);
    }

    public function logout() 
    {
        auth()->logout();

        return to_route('welcome');
    }

}
