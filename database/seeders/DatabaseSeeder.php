<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// use App\Model\User;
// use App\Model\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->count(50)->create();
        \App\Models\Post::factory()->count(100)->create();
        \App\Models\Comment::factory()->count(100)->create();
    }
}
