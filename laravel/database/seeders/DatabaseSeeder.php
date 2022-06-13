<?php

namespace Database\Seeders;

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
            ArtikelSeeder::class,
            BankSoalSeeder::class,
            QuestionAnswerSeeder::class,
            BootcampSeeder::class,
        ]);
    }
}
