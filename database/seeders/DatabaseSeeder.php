<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /* Primera parte
        $user = new User();

        $user->name = 'Jan Carlos Jaimes';
        $user->email = 'jacajali@gmail.com';
        $user->password = bcrypt('password');

        $user->save();

        $post = new Post();
        $post->title = 'My first post';
        $post->content = 'This is my first post';
        $post->categoria = 'general';
        $post->published_at = now();
        $post->is_active = true;

        $post->save();
        */

        //- LLamar a los otros seeders
        $this->call([
            UserSeeder::class,
            PostSeeder::class,
        ]);
    }
}
