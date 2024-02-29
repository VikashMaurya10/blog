<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function register()
    {
        return view('register.register');
    }

    public function store()
    {
        $att =  request()->validate([
            'name' => 'required|min:3|max:255',
            'username' => 'required|min:3|max:255',
            'email' => 'required|email|min:3|max:255',
            'password' => ['required', 'min:2', 'max:255']
        ]);

        User::create($att);
        return redirect("/");
    }
}
