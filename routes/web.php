<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return 'Selamat Datang';
// });

// Route::get('/', [PageController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);

// Route::get('/hello', function () {
//     return 'Hello';
// });

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/world', function () {
    return 'World';
});

// Route::get('/about', function () {
//     return 'NIM dan nama';
// });

// Route::get('/about', [PageController::class, 'about']);
Route::get('/about', [AboutController::class, 'about']);

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID '.$id;
// });

// Route::get('/articles/{id}', [PageController::class, 'articles']);
Route::get('/articles/{id}', [AboutController::class, 'articles']);