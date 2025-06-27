<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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
        "title" => "Posts"]);
});