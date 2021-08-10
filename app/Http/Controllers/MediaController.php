<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medias;

class MediaController extends Controller
{
    public function defaultMedia() {
        return view('home', [
            "title" => "Media",
            "md" => Medias::all()
        ]);
    }

    public function showMedia(Medias $media_id) {
        return view('media', [
            "title" => "Media Post",
            "md" => $media_id
        ]);
    }
}
