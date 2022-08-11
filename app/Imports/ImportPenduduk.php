<?php

namespace App\Imports;

use App\Models\Penduduk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ImportPenduduk implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Penduduk([
            'no_kk' => $row[1],
            'validasi' => $row[2],
            'nik' => $row[3],
            'nama' => $row[4],
            'tempat_lahir' => $row[5],
            'tgl_lahir' => $row[24]? date("Y-m-d", strtotime($row[6])): null,
            'umur' => $row[7],
            'hub_keluarga' => $row[8],
            'status_kawin' => $row[9],
            'pendidikan' => $row[10],
            'jenis_kelamin' => $row[11],
            'agama' => $row[12],
            'pekerjaan' => $row[13],
            'nama_ayah' => $row[14],
            'nama_ibu' => $row[15],
            'status_pendidikan' => $row[16],
            'rt' => $row[17],
            'rw' => $row[18],
            'dusun' => $row[19],
            'tgl_nikah' => $row[24]? date("Y-m-d", strtotime($row[20])): null,
            'no_buku_nikah' => $row[21],
            'kua' => $row[22],
            'akte_lahir' => $row[23],
            'tgl_kematian' => $row[24]? date("Y-m-d", strtotime($row[24])): null,
            'pukul_kematian' => $row[25],
            'ket_kematian' => $row[26],
            'no_bpjs' => $row[27],
            'jabatan' => $row[28],
            'telepon' => $row[29],
            'no_ijazah' => $row[30],
            'nik_ayah' => $row[31],
            'nik_ibu' => $row[32],
            'tgl_cerai' => $row[24]? date("Y-m-d", strtotime($row[33])): null,
            'no_akta_cerai' => $row[34],
            'gol_darah' => $row[35],
            'penyandang_cacat' => $row[36],
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
