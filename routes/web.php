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
     $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Adithya ramadhan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "nama saya adit",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod aspernatur culpa incidunt deleniti reiciendis laboriosam molestias ea libero officiis. Laborum consequuntur porro aliquid voluptatem a quas ab! Consectetur doloremque eaque fugit reprehenderit. Illo dignissimos fugiat, omnis, nulla voluptatum quo assumenda unde ab suscipit vero temporibus hic eius repudiandae veniam molestiae?",
        ]
    ];
    
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});