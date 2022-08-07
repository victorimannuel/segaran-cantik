<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kegiatan;
use App\Models\Penduduk;
use App\Models\Usaha;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        Kegiatan::factory(10)->create();
        Usaha::factory(10)->create();
    }
}
