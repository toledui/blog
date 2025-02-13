<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $posts = Post::factory(100)->create();

       foreach ($posts as $post) {
        $post->tags()->attach([
            rand(1, 4),
            rand(5, 8)
        ]);
       }
    }
}
