<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //
    public function getKegiatan() {
        return view('profil.profil');
    }
}
