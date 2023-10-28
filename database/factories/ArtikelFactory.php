<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArtikelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'foto' => 'Data Percobaan',
            'judul' => fake()->words(rand(3, 5), true),
            'slug' => fake()->slug(rand(3, 5), false),
            'body' => fake()->words(100, true),
        ];
    }
}