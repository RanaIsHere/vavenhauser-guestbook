<?php

use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;
use App\Models\Medias;

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