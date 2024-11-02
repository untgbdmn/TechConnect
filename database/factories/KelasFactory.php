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
            'tingkat_kelas' => $this->faker->randomElement(['7', '8', '9', '10', '11', '12', '13']),
            'kelas_code' => $this->faker->unique()->word,
            'jumlah_siswa' => $this->faker->numberBetween(20, 40),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
