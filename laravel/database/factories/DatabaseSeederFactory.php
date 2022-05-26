<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Post;
use App\Models\Belajar;
use App\Models\Comment;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DatabaseSeederFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            User::factory(3)->create(),
            Post::factory(10)->create(),
            Belajar::factory(10)->create(),
            Comment::factory(100)->create(),
        ];
    }
}
