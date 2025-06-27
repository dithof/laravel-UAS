<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::get('/blog', function () {
    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});
// Halaman untuk single post
Route::get('posts/{slug}', function ($slug) {

    return view('post', [
        "title" => "Single Post",
         "post" => Post::find($slug)
    ]);
});