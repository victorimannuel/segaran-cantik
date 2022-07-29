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
//        if($this->request == 0) {
//            $items = $this->request->items ?? 100;      // get the pagination number or a default
//        }

        $items = $this->request->items ?? 100;      // get the pagination number or a default
//        $items = 100;

        $penduduk_paginated = Penduduk::where(
            "nama","like","%".$this->request->get("q")."%"
        )->orWhere(
            "nik","like","%".$this->request->get("q")."%"
        )->orWhere(
            "no_kk","like","%".$this->request->get("q")."%"
        )->paginate($items)->appends(['items' => $items]);

        $penduduk = Penduduk::all();
        $jumlah_penduduk = count($penduduk);
        $user_id =Auth::id();
        $user = new User();
        $user_name = $user->find($user_id)->name;
        $view->with([
            'penduduks' => $penduduk_paginated,
            'items' => $items,
            'jumlah_penduduk' => $jumlah_penduduk,
            'user_name' => $user_name,
        ]);
    }
}
