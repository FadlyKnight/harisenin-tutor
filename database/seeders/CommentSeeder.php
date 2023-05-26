<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Post::all() as $key => $value) {
            Comment::create([
                'post_id' => $value->id,
                'name' => fake()->firstNameMale,
                'comment' => fake()->text()
            ]);
        }        
    }
}
