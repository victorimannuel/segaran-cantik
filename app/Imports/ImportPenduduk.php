<?php

namespace App\Imports;

use App\Models\Penduduk;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportPenduduk implements ToModel
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
            'nik' => $row[3],
            'nama' => $row[4],
        ]);
    }
}
