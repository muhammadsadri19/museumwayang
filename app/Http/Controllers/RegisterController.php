<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => 'Register',
            "active" => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'username' => 'required|min:6|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:4|max:16'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        session()->flash('success', 'Registration Complete!');
        
        return redirect('/login');
    }
}
