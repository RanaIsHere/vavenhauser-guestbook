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

    public function createBook(Request $request)
    {  
        return $request->all();

        // Guestbook::create();
    }
}
