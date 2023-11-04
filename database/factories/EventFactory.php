<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
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
            'date' => $this->faker->dateTime(),
            'place' => $this->faker->word() . " " . $this->faker->word() . " " . $this->faker->word(),
            'image' => 'img/pic' . rand(1, 30) . '.jpg',
            'description' => $this->faker->paragraph(20),
        ];
    }
}
