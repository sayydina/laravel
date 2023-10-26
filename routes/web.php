<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
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
        "title" => "home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
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
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "Post By Category : $category->name",
        "active" => 'categories',
        'posts' => $category->posts->load('category', 'author'),
    ]);
});

Route::get('/authors{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Post By Authors : $author->name",
        'posts' => $author->posts->load('category', 'author'),
    ]);
});