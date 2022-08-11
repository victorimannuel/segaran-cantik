<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Penduduk;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penduduk>
 */
class PendudukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'no_kk'  => $this->faker->numerify('##########'),
            'nik'  => $this->faker->numerify('##########'),
            'rt'  => $this->faker->numerify('#'),
            'rw'  => $this->faker->numerify('#'),
            'dusun'  => $this->faker->sentence(1),
            'validasi'  => $this->faker->numerify('##########'),
        ];
    }
}
