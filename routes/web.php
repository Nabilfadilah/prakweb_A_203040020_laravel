<?php

// use App\Models\Post;
// use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('home', [
        "title" => "Home",
        'active' => 'home'
    ]);
});

// kalau pak sandhika kutipnya ''
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about',
        "name" => "M Nabil Fadilah",
        "email" => "nabIlFadilah8@gmail.com",
        "image" => "nabil.png"
    ]);
});


Route::get('/blog', [PostController::class, 'index']); // index = method

// halaman single
Route::get('posts/{post:slug}', [PostController::class, 'show']); // show = method

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post by Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'author')
//     ]);
// });


// Route::get('/authors/{author:username}', function (User $author) {
//     return view('Posts', [
//         'title' => "Post by Author : $author->name",
//         'active' => 'posts',
//         'posts' => $author->posts->load('category', 'author'),
//     ]);
// });
