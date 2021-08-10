<?php

use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;
use App\Models\Medias;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('index', [
        "title" => "Home"
     ]);
});

Route::get('media/', [MediaController::class, "defaultMedia"]);

Route::get('media/{media_id:media_linker}', [MediaController::class, "showMedia"]);

Route::get('/tags', function () {
    return view('tag', [
        'title' => 'Post Tags List',
        'tag' => Category::all()
    ]);
}); 

Route::get('tags/{category:media_category_linker}', function (Category $category) {
    return view('tags', [
        'title' => $category->media_category_name,
        'medias' => $category->medias,
        'category' => $category->media_category_name
    ]);
});