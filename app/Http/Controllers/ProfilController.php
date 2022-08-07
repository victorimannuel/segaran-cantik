<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Usaha;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function getAll() {

        $kegiatan = Kegiatan::all();
        $usaha = Usaha::all();

        return view('profil.profil')->with([
            'kegiatans' => $kegiatan,
            'usahas' => $usaha,
            'items' => 10,
        ]);
    }
}
