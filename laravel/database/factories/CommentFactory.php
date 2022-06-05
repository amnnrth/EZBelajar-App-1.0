<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=>User::get()->random()->id,
            'post_id'=>Post::get()->random()->id,
//            'belajar_id'=>Belajar::get()->random()->id,
            'comment'=>$this->faker->paragraph,
        ];
    }
}
