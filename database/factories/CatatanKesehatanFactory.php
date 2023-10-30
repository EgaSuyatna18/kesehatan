<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CatatanKesehatan>
 */
class CatatanKesehatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 2,
            'sbp' => rand(50, 250),
            'dbp' => rand(50, 250),
            'kolesterol' => rand(50, 250),
            'tanggal' => fake()->date(),
            'status_tekanan_darah' => '-',
            'status_kadar_kolesterol' => '-',
        ];
    }
}