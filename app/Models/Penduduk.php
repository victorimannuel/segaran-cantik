<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

//use Illuminate\Database\Eloquent\Model;
//use App\Traits\Uuids;
//use Illuminate\Database\Eloquent\SoftDeletes;

//    use Uuids;
//    use SoftDeletes;

//    protected $table = 'penduduks';
//    protected $dates = ['deleted_at'];
    protected $fillable = [
        'no_kk', 'validasi', 'nik', 'nama', 'tempat_lahir', 'tgl_lahir', 'umur', 'hub_keluarga',
        'status_kawin', 'pendidikan', 'jenis_kelamin', 'agama', 'pekerjaan', 'nama_ayah', 'nama_ibu',
        'status_pendidikan', 'alamat', 'rt', 'rw', 'dusun', 'tgl_nikah', 'no_buku_nikah', 'kua',
        'akte_lahir', 'tgl_kematian', 'pukul_kematian', 'ket_kematian' , 'no_bpjs', 'jabatan',
        'telepon', 'no_ijazah', 'nik_ayah', 'nik_ibu', 'tgl_cerai', 'no_akta_cerai', 'gol_darah',
        'penyandang_cacat',
    ];
//    protected $fillable = [
//        'no_kk', 'nik', 'nama',
//    ];
}

