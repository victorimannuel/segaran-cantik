<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usaha>
 */
class UsahaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_usaha' => $this->faker->sentence(1),
            'kontak'  => $this->faker->date('Y-m-d'),
            'rt'  => $this->faker->numerify('#'),
            'rw'  => $this->faker->numerify('#'),
            'dusun'  => $this->faker->randomElement([
                'KRAJAN', 'PUTAT', 'SUMBERBANTENG', 'SUMBERJABON',
                'SUMBERKOTES KULON', 'SUMBERKOTES WETAN'
            ])
        ];
    }
}
