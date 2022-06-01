<?php

namespace Database\Seeders;

use App\Models\Belajar;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
//        Comment::factory(100)->create();
        // \App\Models\User::factory(10)->create();

        $this->call([
            PermissionSeeder::class,
            CreateAdminUserSeeder::class,
            DetailUserSeeder::class,
            QuoteSeeder::class,
        ]);
    }
}
