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
    public function definition(): array
    {
        $heading = '<h2>' . fake()->sentence(4) . '</h2>';
        $para =  $heading . '<p>' . implode('', fake()->paragraphs(10)) . '</p>';

        return [
            'user_id' => 1,
            'title' => fake()->sentence(4, false),
            'slug' => fake()->slug(2, false),
            'body' => $para . $para . $para . $para,
        ];
    }
}
