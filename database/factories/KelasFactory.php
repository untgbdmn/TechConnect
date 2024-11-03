<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kelas>
 */
class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_kelas' => $this->faker->randomElement([
                "Teknik Otomotif",
                "Teknik Listrik",
                "Teknik Komputer",
                "Teknik Mesin",
                "Teknik Sipil"
            ]
            ),
            'tingkat_kelas' => $this->faker->randomElement(['X', 'XI', 'XII']),
            'kelas_code' => $this->faker->unique()->numerify('GRD-###'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
