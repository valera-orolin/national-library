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
        return [
            'title' => $this->faker->sentence(),
            'categories' => $this->faker->word() . ', ' . $this->faker->word() . ', ' . $this->faker->word(),
            'image' => 'img/pic' . rand(1, 30) . '.jpg',
            'text' => $this->faker->paragraph(20)
        ];
    }
}
