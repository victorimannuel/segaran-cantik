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
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
