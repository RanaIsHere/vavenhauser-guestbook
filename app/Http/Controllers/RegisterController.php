<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function defaultIndex() 
    {
        return view('register.index', ["title" => "Register Page"]);
    }

    public function store(Request $request)
    {
        // return $request->all();

        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns'],
            'password' => ['required', 'min: 3', 'max: 255'] 
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Your account has been registered. Please login.');
        
        return redirect('/login');
    }
}
