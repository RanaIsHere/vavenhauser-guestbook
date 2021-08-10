<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medias;

class MediaController extends Controller
{
    public function defaultMedia() {
        return view('home', [
            "title" => "Media",
            "md" => Medias::getAll()
        ]);
    }

    public function showMedia($media_linker) {
        return view('media', [
            "title" => "Media Post",
            "md" => Medias::get_specified_media($media_linker)
        ]);
    }
}
