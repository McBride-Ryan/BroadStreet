<?php

namespace Database\Seeders;

use App\Models\Like;
use App\Models\User;
use App\Models\Post;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(13)->create();
        Post::factory()->count(13)->create();
        Like::factory()->count(200)->create();
    }
}
