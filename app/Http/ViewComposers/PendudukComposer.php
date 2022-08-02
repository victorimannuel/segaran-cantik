<?php

namespace App\Http\ViewComposers;

use App\Models\Penduduk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PendudukComposer
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function compose(View $view)
    {
        $items = request('items') ?? 100;  // get the pagination number or a default

        $query = Penduduk::query();


        if (request('rt') != 'RT') {
            $query->when($this->request->has('rt'), function ($q) {
                return $q->where("rt", "=", request('rt'));
            });
        }
        if (request('rw') != 'RW') {
            $query->when($this->request->has('rw'), function ($q) {
                return $q->where("rw", "=", request('rw'));
            });
        }
        if (request('dusun') != 'DUSUN') {
            $query->when($this->request->has('dusun'), function ($q) {
                return $q->where("dusun", "=", request('dusun'));
            });
        }
        if (request('q') != '') {
            $query->when($this->request->has('q'), function ($q) {
                return $q->where(
                    "nama", "like", "%" . request("q") . "%"
                )->orWhere(
                    "nik", "like", "%" . request("q") . "%"
                )->orWhere(
                    "no_kk", "like", "%" . request("q") . "%"
                );
            });
        }

        $penduduk_paginated = $query->paginate($items)->appends(['items' => $items]);

        $penduduk = Penduduk::all();
        $jumlah_penduduk = count($penduduk);
        $user_id =Auth::id();
        $user = new User();
        $user_name = $user->find($user_id)->name;

        $jumlah_laki = Penduduk::where('jenis_kelamin', '=', 'L')->count();
        $jumlah_perempuan = Penduduk::where('jenis_kelamin', '=', 'P')->count();

        $balita = Penduduk::whereBetween('umur', [5,11]);
        $anak = Penduduk::whereBetween('umur', [5,11]);
        $remaja = Penduduk::whereBetween('umur', [12,25]);
        $dewasa = Penduduk::whereBetween('umur', [26,45]);
        $lansia = Penduduk::whereBetween('umur', [46,65]);
        $manula = Penduduk::where('umur', '>=', 65);

        $view->with([
            'penduduks' => $penduduk_paginated,
            'items' => $items,
            'jumlah_penduduk' => $jumlah_penduduk,
            'user_name' => $user_name,
            'jenis_kelamin' => [
                'jumlah_laki' => $jumlah_laki,
                'jumlah_perempuan' => $jumlah_perempuan,
            ],
            'pencarian' => [
                'rt' => request('rt'),
                'rw' => request('rw'),
                'q' => request('q'),
            ],
            'kategori_umur' => [
                'balita' => $balita,
                '$anak' => $anak,
                '$remaja' => $remaja,
                '$dewasa' => $dewasa,
                '$lansia' => $lansia,
                '$manula' => $manula,
            ]
        ]);
    }
}
