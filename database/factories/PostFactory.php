<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->words(random_int(3, 7), true);
        return [
            'user_id'=> random_int(1, 10),
            'title'=>ucfirst($title),
            'slug'=>str_slug($title),
            'text'=>fake()->paragraphs(5, true),
        ];
    }
}
