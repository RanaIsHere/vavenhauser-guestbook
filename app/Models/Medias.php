<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class Medias extends Model
// {
//     use HasFactory;
// }

class Medias 
{
    static $media = [
        [
            "media_title" => "Website Creation in 2021",
            "media_linker" => "website-creation-in-2021",
            "media_author" => "RNA",
            "media_message" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, optio.",
            "media_image" => "img_1.jpg"
        ],

        [
            "media_title" => "Website Debugging",
            "media_linker" => "website-debugging",
            "media_author" => "Zero",
            "media_message" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, optio.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, optio.",
            "media_image" => "img_2.jpg"
        ]
    ];

    public static function getAll() {
        return collect(self::$media);
    }

    public static function get_specified_media($media_linker) {
        $media_model = static::getAll();
        
        return $media_model->firstWhere('media_linker', $media_linker);
    }
}