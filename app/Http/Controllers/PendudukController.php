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
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Activitylog\Models\Activity;

class PendudukController extends Controller
{

    public function __construct()
    {
        $this->penduduk = new Penduduk();
    }

    // index function is not necessary because the page variables have been
    // passed through view composer in app/Http/ViewComposers/PendudukComposer.php
    public function index()
    {
    }

    // show create view
    public function viewCreate()
    {
        return view('penduduk/create', [
            'page' => 'Tambah Penduduk']);
    }

    // show read view
    public function viewRead($id)
    {
        $data = $this->penduduk->find($id);
        $activityLog = Activity::all()->where('subject_id', $id);
        return view('penduduk/read', [
            'penduduk' => $data,
            'activityLogs' => $activityLog,
            'page' => 'Data Penduduk',
            'aside_state' => 'closed'
        ]);
    }

    // show edit view
    public function viewEdit($id)
    {
        $data = Penduduk::find($id);
        return view('penduduk/edit', [
            'penduduk' => $data,
            'page' => 'Ubah Data Penduduk',
            'aside_state' => 'closed'
        ]);
    }

    // create data
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
//            'no_kk' => 'required|max:16|min:16',
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
        Alert::success('Data berhasil ditambahkan');
        return redirect()->route('main.dashboard')->with([
            'success', 'Penduduk berhasil ditambahkan',
            'page', 'Dashboard',
        ]);
    }

    // update data
    public function update(Request $request)
    {
        $penduduk = Penduduk::find($request->id_penduduk);
        $penduduk->no_kk = $request->no_kk;
        $penduduk->validasi = $request->validasi;
        $penduduk->nik = $request->nik;
        $penduduk->nama = $request->nama;
        $penduduk->tempat_lahir = $request->tempat_lahir;
        $penduduk->tgl_lahir = $request->tgl_lahir;
        $penduduk->umur = $request->umur;
        $penduduk->hub_keluarga = $request->hub_keluarga;
        $penduduk->status_kawin = $request->status_kawin;
        $penduduk->pendidikan = $request->pendidikan;
        $penduduk->jenis_kelamin = $request->jenis_kelamin;
        $penduduk->agama = $request->agama;
        $penduduk->pekerjaan = $request->pekerjaan;
        $penduduk->nama_ayah = $request->nama_ayah;
        $penduduk->nama_ibu = $request->nama_ibu;
        $penduduk->status_pendidikan = $request->status_pendidikan;
        $penduduk->rt = $request->rt;
        $penduduk->rw = $request->rw;
        $penduduk->dusun = $request->dusun;
        $penduduk->tgl_nikah = $request->tgl_nikah;
        $penduduk->no_buku_nikah = $request->no_buku_nikah;
        $penduduk->kua = $request->kua;
        $penduduk->akte_lahir = $request->akte_lahir;
        $penduduk->tgl_kematian = $request->tgl_kematian;
        $penduduk->pukul_kematian = $request->pukul_kematian;
        $penduduk->ket_kematian = $request->ket_kematian;
        $penduduk->no_bpjs = $request->no_bpjs;
        $penduduk->jabatan = $request->jabatan;
        $penduduk->telepon = $request->telepon;
        $penduduk->no_ijazah = $request->no_ijazah;
        $penduduk->nik_ayah = $request->nik_ayah;
        $penduduk->nik_ibu = $request->nik_ibu;
        $penduduk->tgl_cerai = $request->tgl_cerai;
        $penduduk->no_akta_cerai = $request->no_akta_cerai;
        $penduduk->gol_darah = $request->gol_darah;
        $penduduk->penyandang_cacat = $request->penyandang_cacat;
        $penduduk->save();

        $penduduk = Penduduk::find($request->id_penduduk);
        $activityLog = Activity::all()->where('subject_id', $request->id_penduduk);
        Alert::success('Data berhasil diubah');
        return view('penduduk/read', [
            'penduduk' => $penduduk,
            'page' => 'Data Penduduk',
            'success' => 'Penduduk berhasil diedit',
            'activityLogs' => $activityLog
        ]);
    }

    // FIXME: method should not be called using GET method
    // delete data
    public function delete(Request $request) {
        Penduduk::find($request->id_penduduk)->delete();
        DB::table('activity_log')->where('id', $request->id_penduduk)->delete();

        Alert::success('Data berhasil dihapus');
        return redirect()->route('main.dashboard');
    }

    // show export-import view
    public function exportImportView(Request $request){
        return view('main/export-import', ['page' => 'Export / Import Data']);
    }

    // import data
    public function importPenduduk(Request $request){
        Excel::import(new ImportPenduduk, $request->file('file')->store('files'));
        return redirect()->back()->with('success', 'File berhasil diimport');
    }

    // export data
    public function exportPenduduk(Request $request){
        return Excel::download(new ExportPenduduk, 'penduduks.xlsx');
    }

    // show log view
    public function logView(Request $request) {
        $activityLogs = Activity::all()->where('causer_id', Auth::id());
        return view('main/components/notif', ['activityLogs' => $activityLogs,]);
    }

}
