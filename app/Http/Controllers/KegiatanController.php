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

        Kegiatan::create($request->all());
        Alert::success('Kegiatan berhasil ditambahkan');

        return redirect()->route('main.kegiatan')->with(['page', 'Kegiatan']);
    }

    public function update(Request $request)
    {
        $kegiatan = Kegiatan::find($request->id_kegiatan);
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->tgl = $request->tgl;
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
