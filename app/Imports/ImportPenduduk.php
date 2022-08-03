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
            'tgl_lahir' => $row[6],
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
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
