<?php
namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul-post-pertama",
            "author" => "Adithya ramadhan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul-post-kedua",
            "author" => "dithof",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod aspernatur culpa incidunt deleniti reiciendis laboriosam molestias ea libero officiis. Laborum consequuntur porro aliquid voluptatem a quas ab! Consectetur doloremque eaque fugit reprehenderit. Illo dignissimos fugiat, omnis, nulla voluptatum quo assumenda unde ab suscipit vero temporibus hic eius repudiandae veniam molestiae?",
        ]
    ];

    public static function all()
    {
        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }
        return $post;
    }
}