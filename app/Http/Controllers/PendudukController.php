<?php

namespace App\Http\Controllers;

use App\Exports\ExportPenduduk;
use App\Imports\ImportPenduduk;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Penduduk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Activitylog\Models\Activity;

class PendudukController extends Controller
{

    public function __construct()
    {
        $this->penduduk = new Penduduk();
    }

    public function createForm()
    {
        return view('penduduk/create');
    }

    public function readOnlyForm($id)
    {
        $data = $this->penduduk->find($id);
//        $activityLog = DB::table('activity_log')->where('subject_id', $id);
        $activityLog = Activity::all()->where('subject_id', $id);
        $oldArr = [];
//        $properties = json_decode($activityLog[0]->properties, true);
//        foreach ($properties as $prop) {
//            foreach ($prop as $p) {
//                error_log($p);
//                array_push($oldArr, )
//                        }
//        }
//        error_log($activityLog);
//        error_log($properties[]);
        return view('penduduk/readonly', ['penduduk' => $data, 'activityLogs' => $activityLog]);
    }

    public function editForm($id)
    {
        $data = $this->penduduk->find($id);
        return view('penduduk/edit', ['penduduk' => $data]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'no_kk' => 'required|max:16|min:16',
//            'validasi' => 'required',
//            'nik' => 'required|max:16|min:16',
//            'hub_keluarga' => 'required',
//            'status_kawin' => 'required',
//            'jenis_kelamin' => 'required',
//            'agama' => 'required',
//            'tempat_lahir' => 'required',
//            'tgl_lahir' => 'required',
//            'rt' => 'required',
//            'rw' => 'required',
//            'dusun' => 'required',
//            'tempat_lahir',
//            'tgl_lahir',
//            'umur',
//            'hub_keluarga',
//            'status_kawin',
//            'pendidikan',
//            'jenis_kelamin',
//            'agama',
//            'pekerjaan',
//            'nama_ayah',
//            'nama_ibu',
//            'status_pendidikan',
//            'alamat',
//            'tgl_nikah',
//            'no_buku_nikah',
//            'kua',
//            'akte_lahir',
//            'tgl_kematian',
//            'pukul_kematian',
//            'ket_kematian',
//            'no_bpjs', 'jabatan',
//            'telepon',
//            'no_ijazah',
//            'nik_ayah',
//            'nik_ibu',
//            'tgl_cerai',
//            'no_akta_cerai',
//            'gol_darah',
//            'penyandang_cacat',
        ]);

        //  Store data in database
        Penduduk::create($request->all());

        return redirect()->route('main.dashboard')->with([
            'success', 'Penduduk berhasil ditambahkan',
            'page', 'dashboard',
        ]);
    }

    public function update(Request $request)
    {
//        DB::table('penduduks')->where('id',$request->id_penduduk)->update([
//            'no_kk' => $request->no_kk,
//            'nama' => $request->nama,
//            'nik' => $request->nik,
//            'dusun' => $request->dusun,
//            'rw' => $request->rw,
//            'rt' => $request->rt,
//        ]);

        $penduduk = Penduduk::find($request->id_penduduk);
        $penduduk->no_kk = $request->no_kk;
        $penduduk->nama = $request->nama;
        $penduduk->nik = $request->nik;
        $penduduk->dusun = $request->dusun;
        $penduduk->rw = $request->rw;
        $penduduk->rt = $request->rt;
        $penduduk->save();

        return view('penduduk/readonly', [
            'penduduk' => $penduduk,
            'success', 'Penduduk berhasil diedit',
        ]);
    }

    public function show_data(Request $request)
    {
        $items = request('items') ?? 100;  // get the pagination number or a default

        $query = Penduduk::query();

        if ($this->request->has('q')) {
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

        $penduduk_paginated = $query->paginate($items)->appends(['items' => $items]);

        $penduduk = Penduduk::all();
        $jumlah_penduduk = count($penduduk);
        $user_id =Auth::id();
        $user = new User();
        $user_name = $user->find($user_id)->name;

        return view('main/dashboard')->with([
            'penduduks' => $penduduk_paginated,
            'items' => $items,
            'jumlah_penduduk' => $jumlah_penduduk,
            'user_name' => $user_name,
            'rt' => request('rt'),
            'rw' => request('rw'),
            'q' => request('q'),
        ]);
    }

    public function importView(Request $request){
        return view('main/export-import', ['page' => 'Export / Import Data']);
    }

    public function import(Request $request){
        Excel::import(new ImportPenduduk, $request->file('file')->store('files'));
        return redirect()->back()->with('success', 'File berhasil diimport');
    }

    public function exportPenduduk(Request $request){
        return Excel::download(new ExportPenduduk, 'penduduks.xlsx');
    }

}
