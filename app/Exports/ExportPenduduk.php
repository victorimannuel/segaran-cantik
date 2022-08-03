<?php

namespace App\Exports;

use App\Models\Penduduk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportPenduduk implements FromCollection, WithHeadings, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Penduduk::select(
            'id', 'no_kk', 'validasi', 'nik', 'nama', 'tempat_lahir', 'tgl_lahir', 'umur', 'hub_keluarga',
            'status_kawin', 'pendidikan', 'jenis_kelamin', 'agama', 'pekerjaan', 'nama_ayah', 'nama_ibu',
            'status_pendidikan', 'rt', 'rw', 'dusun', 'tgl_nikah', 'no_buku_nikah', 'kua',
            'akte_lahir', 'tgl_kematian', 'pukul_kematian', 'ket_kematian' , 'no_bpjs', 'jabatan',
            'telepon', 'no_ijazah', 'nik_ayah', 'nik_ibu', 'tgl_cerai', 'no_akta_cerai', 'gol_darah',
            'penyandang_cacat'
        )->get();

    }

    public function headings(): array
    {
        return [
            'id', 'no_kk', 'validasi', 'nik', 'nama', 'tempat_lahir', 'tgl_lahir', 'umur', 'hub_keluarga',
            'status_kawin', 'pendidikan', 'jenis_kelamin', 'agama', 'pekerjaan', 'nama_ayah', 'nama_ibu',
            'status_pendidikan', 'rt', 'rw', 'dusun', 'tgl_nikah', 'no_buku_nikah', 'kua',
            'akte_lahir', 'tgl_kematian', 'pukul_kematian', 'ket_kematian' , 'no_bpjs', 'jabatan',
            'telepon', 'no_ijazah', 'nik_ayah', 'nik_ibu', 'tgl_cerai', 'no_akta_cerai', 'gol_darah',
            'penyandang_cacat'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
            ];
    }
}
