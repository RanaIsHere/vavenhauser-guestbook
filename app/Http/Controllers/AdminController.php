<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function defaultAdmin()
    {
        return view('admin.index', ['title' => 'Administration Center']);
    }

    public function showAdmin()
    {
//        TODO create show with adminlte.io
    }
}
