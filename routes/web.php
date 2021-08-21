<?php

use App\Http\Controllers\MediaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Models\Medias;
use App\Models\Category;
use App\Models\User;

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

Route::get('/messaging', [MessageController::class, 'defaultMessage']);

Route::get('/guestbook', [GuestController::class, 'defaultGuest']);
Route::post('/guestbook', [GuestController::class, 'send']);

Route::get('/admin', [AdminController::class, 'defaultAdmin']);

//TODO get verification from session
Route::get('/delete', [AdminController::class, 'defaultAdmin']);
Route::post('/delete', [AdminController::class, 'delete']);

Route::get('/update', [AdminController::class, 'defaultUpdate']);
Route::post('/update', [AdminController::class, 'update']);

Route::get('media/', [MediaController::class, "defaultMedia"]);

Route::get('media/{media_id:media_linker}', [MediaController::class, "showMedia"]);

Route::get('/login', [LoginController::class, 'defaultIndex']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'defaultIndex']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/tag', function () {
    return view('tag', [
        'title' => 'Post Tags List',
        'tag' => Category::all()
    ]);
});
