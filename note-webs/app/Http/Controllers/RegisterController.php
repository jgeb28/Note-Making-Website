<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('register');
    }

    public function submit() {
        $validator = validator(request()->all(), [
            'email' => ['required', 'email', 'unique:users'],
            'name' => ['required', 'string', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        else {
        User::create([
            'name' => request()->name,
            'email' => request()->email,
            'password' => bcrypt(request()->password)
        ]);
        return redirect()->back()->with('message', 'Account was created');
        }
    }

}
