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
        $data['name'] = 'My post title';
        $data['content'] = 'Content for post title';
        $data['user_id'] = 1;
        $post = Post::create($data);
        // $post->slugs()->create(['slug' => 'post-123456778']);

        // $post = Post::find(6);
        $post->slugs()->create(['slug' => 'post-11234']);
        $post->images()->create(['url' => 'post-123456778']);
        $post->images()->createMany([
            ['url' => 'post-123456778'],
            ['url' => 'post2']
        ]);
    }
}
