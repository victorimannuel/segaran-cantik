<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kegiatan>
 */
class KegiatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_kegiatan' => $this->faker->sentence(1),
            'tgl'  => $this->faker->date('Y-m-d'),
            'lokasi' => $this->faker->sentence(5),
            'deskripsi' => $this->faker->sentence(2),
            'file' => $this->faker->randomElement([
                '488162.jpg', '2416021.jpg', 'stei_logo.png', 'MU.webp',
                'photo-1512552288940-3a300922a275.jpeg', 'beautiful_view-wallpaper-2560x1440.jpg',
                'Screenshot from 2022-06-25 19-07-31.png',
            ]),
        ];
    }
}
