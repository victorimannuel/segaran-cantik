<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Usaha;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UsahaController extends Controller
{
    public function viewCreate()
    {
        return view('usaha/create', [
            'page' => 'Tambah UMKM'
        ]);
    }


    public function viewRead($id)
    {
        $usaha = Usaha::find($id);
        return view('usaha/read', [
            'usaha' => $usaha,
            'page' => 'Data UMKM',
            'aside_state' => 'closed'
        ]);
    }

    public function viewEdit($id)
    {
        $usaha = Usaha::find($id);
        return view('usaha/edit', [
            'usaha' => $usaha,
            'page' => 'Ubah Data UMKM',
            'aside_state' => 'closed'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_usaha' => 'required',
        ]);

        $file = $request->file('file');
        $tujuan_upload = 'usaha';
        if (isset($file)) {
            $file_name =  $file->getClientOriginalName();
            $file->move($tujuan_upload, $file_name);
        }
        Usaha::create([
            'nama_usaha' => $request->nama_usaha,
            'deskripsi' => $request->deskripsi,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'dusun' => $request->dusun,
            'file' => $file? $file_name : null,
            'jam_buka' => $request->jam_buka,
            'jam_tutup' => $request->jam_tutup,
        ]);

        Alert::success('Data Kegiatan berhasil ditambah');

        return redirect()->route('main.usaha')->with(['page', 'Kegiatan']);
    }

    public function update(Request $request)
    {
        $file = $request->file('file');
        $tujuan_upload = 'usaha';
        if (isset($file)) {
            $file_name =  $file->getClientOriginalName();
            $file->move($tujuan_upload, $file_name);
        }

        $usaha = Usaha::find($request->id_usaha);
        $usaha->nama_usaha = $request->nama_usaha;
        $usaha->kontak = $request->kontak;
        $usaha->rt = $request->rt;
        $usaha->rw = $request->rw;
        $usaha->dusun = $request->dusun;
        if (isset($file)) {
            $usaha->file = $file_name;
        }
        $usaha->jam_buka = $request->jam_buka;
        $usaha->jam_tutup = $request->jam_tutup;
        $usaha->save();

        Alert::success('Data UMKM berhasil diubah');
        return view('usaha/read', [
            'usaha' => $usaha,
            'page' => 'Data Kegiatan',
        ]);
    }

    public function delete(Request $request)
    {
        Usaha::find(request('id_usaha'))->delete();

        Alert::success('Data UMKM berhasil dihapus');
        return redirect()->route('main.usaha');
    }
}
