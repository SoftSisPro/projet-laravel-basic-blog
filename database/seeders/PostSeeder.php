<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $post = new Post();

        $post->title = 'My first post';
        $post->content = 'This is my first post';
        $post->category = 'general';
        $post->published_at = now();
        $post->is_active = true;

        $post->save();

        $post = new Post();

        $post->title = 'Mi Post 2';
        $post->content = 'Contenido del Post 2';
        $post->category = 'desarrollo';
        $post->published_at = now();
        $post->is_active = false;

        $post->save();
    }
}
