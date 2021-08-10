<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // protected $fillable = ['media_category_name', 'media_category_linker'];
    protected $guarded = ['id'];

    public function medias()
    {
        return $this->hasMany(Medias::class);
    }
}