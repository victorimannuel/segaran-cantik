<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KegiatanController extends Controller
{
    public function viewCreate()
    {
        return view('kegiatan/create', [
            'page' => 'Tambah Kegiatan'
        ]);
    }


    public function viewRead($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('kegiatan/read', [
            'kegiatan' => $kegiatan,
            'page' => 'Data Kegiatan',
            'aside_state' => 'closed'
        ]);
    }

    public function viewEdit($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('kegiatan/edit', [
            'kegiatan' => $kegiatan,
            'page' => 'Ubah Data Kegiatan',
            'aside_state' => 'closed'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kegiatan' => 'required',
        ]);

        $file = $request->file('file');
        $tujuan_upload = 'data_file/kegiatan';
        if (isset($file)) {
            $file_name =  $file->getClientOriginalName();
            $file->move($tujuan_upload, $file_name);
        }

        Kegiatan::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'deskripsi' => $request->deskripsi,
            'file' => $file? $file_name : null,
            'tgl' => $request->tgl,
            'lokasi' => $request->lokasi,
        ]);

        Alert::success('Data Kegiatan berhasil ditambah');
        return redirect()->route('main.kegiatan')->with(['page', 'Kegiatan']);
    }

    public function update(Request $request)
    {
        $file = $request->file('file');
        $tujuan_upload = 'data_file/kegiatan';
        if (isset($file)) {
            $file_name =  $file->getClientOriginalName();
            $file->move($tujuan_upload, $file_name);
        }
        $kegiatan = Kegiatan::find($request->id_kegiatan);
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->tgl = $request->tgl;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->lokasi = $request->lokasi;
        if (isset($file)) {
            $kegiatan->file = $file_name;
        }
        $kegiatan->save();

        Alert::success('Kegiatan berhasil diubah');
        return view('kegiatan/read', [
            'kegiatan' => $kegiatan,
            'page' => 'Data Kegiatan',
        ]);
    }

    public function delete(Request $request)
    {
        Kegiatan::find(request('id_kegiatan'))->delete();

        Alert::success('Data berhasil dihapus');
        return redirect()->route('main.kegiatan');
    }
}
