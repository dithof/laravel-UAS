<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Adithya ramadhan - MI.22.R1",
        "email" => "aditakun2023@gmail.com",
        "image" => "avatar.png"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// Halaman untuk single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => 'Post By Category: ' . $category->name,
//         'posts' => $category->posts->load('category', 'user')
//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => 'Posts By Author: ' . $author->name,
//         'active' => 'posts',
//         'posts' => $author->posts->load('category', 'user')
//     ]);
// });