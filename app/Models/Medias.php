<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medias extends Model
{
    use HasFactory;

    // protected $fillable = ['media_title', 'media_category_id', 'media_linker', 'media_preview', 'media_message', 'media_image'];
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
