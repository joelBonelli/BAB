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
            'title' => fake()->words(3, true),
            'autor' => fake()->name(),
            'description' => fake()->sentence(),
            'price' => fake()->randomFloat(2, 1, 99999.99),
            'released_date' =>fake()->dateTimeBetween(),
            'genre_id' => rand(1,5),
            'image' => 'https://loremflickr.com/320/240?random=' .rand(1,50),
        ];
    }
}
