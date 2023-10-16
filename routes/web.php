<?php

use App\Http\Controllers\PostController;
use App\Models\post;
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

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Sayyidina M Malik",
        "email" => "sayyidinam@gmail.com",
        "image" => "foto.jpg"
    ]);
});


// Route::get('/blog', function () {
//         return view('posts', [
//             "title" => "posts",
//             "posts" => post::all()

//     ]);
// });

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);
