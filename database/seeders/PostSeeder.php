<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pastikan ada user dan category
        $user = User::first() ?? User::factory()->create(['name' => 'Adithya', 'email' => 'aditakun2023@gmail.com']);
        $category = Category::first() ?? Category::create(['name' => 'Laravel', 'slug' => 'laravel']);

        Post::create([
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'excerpt' => 'Ini adalah excerpt post pertama.',
            'body' => 'Ini adalah body post pertama.',
            'category_id' => $category->id,
            'user_id' => $user->id,
            'published_at' => now(),
        ]);
        Post::create([
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'excerpt' => 'Ini adalah excerpt post kedua.',
            'body' => 'Ini adalah body post kedua.',
            'category_id' => $category->id,
            'user_id' => $user->id,
            'published_at' => now(),
        ]);
    }
}
