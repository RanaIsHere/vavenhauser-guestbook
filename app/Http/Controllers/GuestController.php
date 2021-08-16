<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guestbook;

class GuestController extends Controller
{
    public function defaultGuest()
    {
        return view('guestbook.index', ["title" => "Guestbook Page"]);
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['max:255', 'email:dns'],
            'phone' => ['required', 'max:255', 'min:2'],
            'message' => ['required', 'min:4']
        ]);

        Guestbook::create($data);

        $request->session()->flash('sent', 'Your message to our organization has been sent and validated!');

        return redirect('/guestbook');
    }
}
