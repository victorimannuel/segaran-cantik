<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Penduduk extends Model
{
    use HasFactory, Notifiable, LogsActivity;

    protected $table = 'penduduks';
    protected static $logAttributes = ['nama', 'no_kk', 'nik'];
    protected static $recordEvents = ['updated', 'deleted'];
    protected static $logFillable = true;
    protected static $logOnlyDirty = true;
    protected static $logName = 'penduduk';

    function getEventName($eventName) {
        switch ($eventName) {
            case 'created':
                return 'dibuat';
            case 'updated':
                return 'diedit';
            case 'deleted':
                return 'dihapus';
        }
    }

    public function getDescriptionForEvent(string $eventName): string
    {
        $userId =Auth::id();
        $user = new User();
        $userName = $user->find($userId)->name;

        $eventNameIDN = $this->getEventName($eventName);

        return "Data telah $eventNameIDN oleh $userName pada";
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logFillable()
            ->logOnlyDirty();
    }

    protected $fillable = [
        'no_kk', 'validasi', 'nik', 'nama', 'tempat_lahir', 'tgl_lahir', 'umur', 'hub_keluarga',
        'status_kawin', 'pendidikan', 'jenis_kelamin', 'agama', 'pekerjaan', 'nama_ayah', 'nama_ibu',
        'status_pendidikan', 'alamat', 'rt', 'rw', 'dusun', 'tgl_nikah', 'no_buku_nikah', 'kua',
        'akte_lahir', 'tgl_kematian', 'pukul_kematian', 'ket_kematian' , 'no_bpjs', 'jabatan',
        'telepon', 'no_ijazah', 'nik_ayah', 'nik_ibu', 'tgl_cerai', 'no_akta_cerai', 'gol_darah',
        'penyandang_cacat',
    ];
}

