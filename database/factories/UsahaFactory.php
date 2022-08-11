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
            'nama_usaha' => $this->faker->randomElement([
                'Tahu', 'Tempe', 'Tebu', 'Batu',
                'Pracang', 'Keropak', 'Padi', 'Kue Kering'
            ]),
            'deskripsi' => $this->faker->sentence(5),
//            'kontak'  => $this->faker->numerify('###########'),
            'kontak'  => '08978665506',
            'rt'  => $this->faker->numerify('#'),
            'rw'  => $this->faker->numerify('#'),
            'dusun'  => $this->faker->randomElement([
                'KRAJAN', 'PUTAT', 'SUMBERBANTENG', 'SUMBERJABON',
                'SUMBERKOTES KULON', 'SUMBERKOTES WETAN'
            ]),
            'file' => $this->faker->randomElement([
                'tahu.jpeg', '2416021.jpg', 'stei_logo.png', 'MU.webp',
                'photo-1512552288940-3a300922a275.jpeg', 'beautiful_view-wallpaper-2560x1440.jpg',
                'Screenshot from 2022-06-25 19-07-31.png',
            ]),
            'jam_buka' => $this->faker->time('H'),
            'jam_tutup' => $this->faker->time('H'),
        ];
    }
}
