<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medias;

class MediaController extends Controller
{
    public function defaultMedia() {
        return view('home', [
            "title" => "Media Posts",
            "active" => 'media',
            "md" => Medias::latest()->search(request(['search', 'category', 'user']), )->paginate(5)->withQueryString()
        ]);
    }

    public function showMedia(Medias $media_id) {
        return view('media', [
            "title" => "Media Post",
            "active" => 'media',
            "md" => $media_id
        ]);
    }
}
