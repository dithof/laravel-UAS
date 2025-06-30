<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;


Route::get('/', function(){
    return view('home', [
        "title" => "Home"
    ]);

});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Adithya ramadhan - MI.22.R1",
        "email" => "aditakun2023@gmail.com",
        "image" => "avatar.png"
    ]);
});
Route::get('/posts', [PostController::class, 'index']);

// Halaman untuk single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});