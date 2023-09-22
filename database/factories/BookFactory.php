<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
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
            'authors' => $this->faker->word() . ' ' . $this->faker->word() . ', ' . 
            $this->faker->word() . ' ' . $this->faker->word(),
            'genres' => $this->faker->word() . ', ' . $this->faker->word(),
            'is_available' => $this->faker->boolean(),
            'release_date' => $this->faker->date(),
            'description' => $this->faker->paragraph(20),
        ];
    }
}
