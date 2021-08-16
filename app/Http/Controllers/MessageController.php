<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MessageController extends Controller
{
    public function defaultMessage()
    {
        return view('message.index', ['title' => 'Messaging App']);
    }
}
