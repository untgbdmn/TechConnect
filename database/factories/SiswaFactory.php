<?php

namespace Database\Factories;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kelas_id' => Kelas::factory()->create()->kelas_id,
            'nama_siswa' => $this->faker->name,
            'no_induk' => $this->faker->unique()->numerify('####'),
            'no_induk_nasional' => $this->faker->unique()->numerify('######'),
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'alamat' => $this->faker->address,
            'tanggal_lahir' => $this->faker->date(),
            'tempat_lahir' => $this->faker->city,
            'phone_number' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'agama' => $this->faker->randomElement(['Kristen', 'Islam', 'Budha', 'Hindu']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
