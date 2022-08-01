<?php

namespace App\Exports;

use App\Models\Penduduk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportPenduduk implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
//        return Penduduk::select('no_kk','nik','nama')->get();
        return Penduduk::all();

    }

    public function headings(): array
    {
        return ["NO", "NOMOR KK", "NIK", "NAMA"];
    }
}
