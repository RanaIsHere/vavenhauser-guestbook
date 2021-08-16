<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Medias;
use App\Models\Guestbook;

class AdminController extends Controller
{
    public function defaultAdmin()
    {
        return view('admin.index', [
            'title' => 'Administration Center',
            'gb_users' => User::all(),
            'gb_medias' => Medias::all(),
            'gb_guestbooks' => Guestbook::all()
        ]);
    }
}
