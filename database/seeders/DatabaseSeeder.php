<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kegiatan;
use App\Models\Penduduk;
use App\Models\Usaha;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\Time;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         User::factory()->create([
        User::create([
            'name' => 'PUSAT',
            'email' => 'pusat@example.com',
            'jabatan' => 'PUSAT',
            'password' => Hash::make('admin123'),
        ]);
        User::create([
            'name' => 'KASUN KRAJAN',
            'email' => 'krajan@example.com',
            'jabatan' => 'KASUN KRAJAN',
            'password' => Hash::make('admin123'),
        ]);
        User::create([
            'name' => 'KASUN PUTAT',
            'email' => 'putat@example.com',
            'jabatan' => 'KASUN PUTAT',
            'password' => Hash::make('admin123'),
        ]);
        User::create([
            'name' => 'KASUN SUMBERBANTENG',
            'email' => 'sumberbanteng@example.com',
            'jabatan' => 'KASUN SUMBERBANTENG',
            'password' => Hash::make('admin123'),
        ]);
        User::create([
            'name' => 'KASUN SUMBERJABON',
            'email' => 'sumberjabon@example.com',
            'jabatan' => 'KASUN SUMBERJABON',
            'password' => Hash::make('admin123'),
        ]);
        User::create([
            'name' => 'KASUN SUMBERKOTES KULON',
            'email' => 'sumberkoteskulon@example.com',
            'jabatan' => 'KASUN SUMBERKOTES KULON',
            'password' => Hash::make('admin123'),
        ]);
        User::create([
            'name' => 'KASUN SUMBERKOTES WETAN',
            'email' => 'sumberkoteswetan@example.com',
            'jabatan' => 'KASUN SUMBERKOTES WETAN',
            'password' => Hash::make('admin123'),
        ]);

//        Penduduk::factory(1100)->create();

        Kegiatan::factory(5)->create();

//        Usaha::factory(5)->create();
        Usaha::create([
            'nama_usaha' => 'Tahu',
            'deskripsi' => 'Jualan Tahu',
            'kontak'  => '08978665506',
            'rt'  => 1,
            'rw'  => 1,
            'dusun'  => 'KRAJAN',
            'file' => 'tahu.jpeg',
            'jam_buka' => '06:00:00',
            'jam_tutup' => '11:00:00',
        ]);

        Usaha::create([
            'nama_usaha' => 'Tempe',
            'deskripsi' => 'Jualan Tempe',
            'kontak'  => '08978665506',
            'rt'  => 1,
            'rw'  => 1,
            'dusun'  => 'KRAJAN',
            'file' => 'tempe.jpeg',
            'jam_buka' => '05:00:00',
            'jam_tutup' => '12:00:00',
        ]);

        Usaha::create([
            'nama_usaha' => 'Pracang',
            'deskripsi' => 'Jualan bermacam-macam',
            'kontak'  => '08978665506',
            'rt'  => 1,
            'rw'  => 1,
            'dusun'  => 'KRAJAN',
            'file' => 'pracang.jpeg',
            'jam_buka' => '08:00:00',
            'jam_tutup' => '21:00:00',
        ]);

        Usaha::create([
            'nama_usaha' => 'Keropak',
            'deskripsi' => 'Jualan Keropak',
            'kontak'  => '08978665506',
            'rt'  => 1,
            'rw'  => 1,
            'dusun'  => 'KRAJAN',
            'file' => 'keropak.jpeg',
            'jam_buka' => '09:00:00',
            'jam_tutup' => '19:00:00',
        ]);

    }
}
