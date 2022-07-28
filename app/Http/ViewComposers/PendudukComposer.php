<?php

namespace App\Http\ViewComposers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
//use App\Repositories\UserRepository;

class PendudukComposer
{
    public function compose(View $view)
    {
        $items = $request->items ?? 10;      // get the pagination number or a default

        $db_penduduk = DB::table('penduduks');
        $penduduk = $db_penduduk->get();
        $penduduk_paginated = $db_penduduk->paginate($items);
        $jumlah_penduduk = count($penduduk);

//        $rt=array();
//        // organize the array by cusip
//        foreach($rt as $k=>$v){
//            foreach($v as $key=>$value){
//                if(!in_array($value, $a)){
//                    $a[]=$value;
//                }
//            }
//        }

        $view->with([
            'penduduks' => $penduduk_paginated,
            'items' => $items,
            'jumlah_penduduk' => $jumlah_penduduk]);
    }
}
