<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medias extends Model
{
    use HasFactory;

    // protected $fillable = ['media_title', 'media_category_id', 'media_linker', 'media_preview', 'media_message', 'media_image'];
    protected $guarded = ['id'];
    protected $with = ['category', 'user'];

    public function scopeSearch($query, array $others) 
    {
        // if(isset($others['search']) ? $others['search'] : false) {
        //     return $query->where('media_title', 'like', '%' . $others['search'] . '%')->orWhere('media_message', 'like', '%' . $others['search'] . '%');
        // }

        $query->when($others['search'] ?? false, function($query, $search) {
            return $query->where('media_title', 'like', '%' . $search . '%')->orWhere('media_message', 'like', '%' . $search . '%');
        });

        $query->when($others['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('media_category_linker', $category);
            });
        });

        $query->when($others['user'] ?? false, function($query, $user) {
            return $query->whereHas('user', function($query) use ($user) {
                $query->where('username', $user);
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
