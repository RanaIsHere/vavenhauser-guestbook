<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function defaultIndex()
    {
        return view('login.index', ["title" => "Login Page"]);
    }

    public function login(Request $request)
    {
        $registeredData = DB::table('users')->where('username', $request->get('username'))->get();
        //dd($registeredData->count());

        $validatedData = $request->validate([
            'username' => ['required', 'max:255'],
            'password' => ['required', 'min: 3', 'max: 255']
        ]);

        if ($registeredData->count() == null) {
            return back()->withErrors([
                'password' => ['The provided password does not exist.'],
                'username' => ['The provided username does not exist.']
            ]);
        }

        if (! Hash::check($validatedData['password'], $registeredData[$registeredData->count()-1]->password)) {
            return back()->withErrors([
                'password' => ['The provided password does not exist.'],
                'username' => ['The provided username does not exist.']
            ]);
        }

        return redirect('/admin');
    }
}
