<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function defaultMessage()
    {
        return view('message.index', ['title' => 'Messaging App']);
    }
}
