<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
         \App\Models\User::factory(10)->create();
         \App\Models\Post::factory(500)->create();
         \App\Models\FollowingUser::factory(5)->create();
    }
}
