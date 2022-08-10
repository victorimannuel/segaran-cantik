<?php

namespace App\Http\ViewComposers;

use App\Models\Kegiatan;
use App\Models\Penduduk;
use App\Models\Usaha;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Spatie\Activitylog\Models\Activity;

class PendudukComposer
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function compose(View $view)
    {
        $items = request('items') ?? 10;  // get the pagination number or a default

        $query = Penduduk::query();

        if (request('rt') != 'RT') {
            $query->when($this->request->has('rt'), function ($q) {
                return $q->where("rt", "=", request('rt'));
            });
        }
        if (request('rw') != 'RW') {
            $query->when($this->request->has('rw'), function ($q) {
                return $q->where("rw", "=", request('rw'));
            });
        }
        if (request('dusun') != 'DUSUN') {
            $query->when($this->request->has('dusun'), function ($q) {
                return $q->where("dusun", "=", request('dusun'));
            });
        }
        if (request('q') != '') {
            $query->when($this->request->has('q'), function ($q) {
                return $q->where("nama", "like", "%" . request("q") . "%")
                    ->orWhere("nik", "like", "%" . request("q") . "%")
                    ->orWhere("no_kk", "like", "%" . request("q") . "%");
            });
        }

        $user_id    = Auth::id();
        $user       = new User();
        $user_name  = $user->find($user_id)->name;
        $jabatan    = $user->find($user_id)->jabatan;

        switch ($jabatan) {
            case 'KASUN KRAJAN': $query->where('dusun', '=', 'KRAJAN'); break;
            case 'KASUN PUTAT': $query->where('dusun', '=', 'PUTAT'); break;
            case 'KASUN SUMBERBANTENG': $query->where('dusun', '=', 'SUMBERBANTENG'); break;
            case 'KASUN SUMBERJABON': $query->where('dusun', '=', 'SUMBERJABON'); break;
            case 'KASUN SUMBERKOTES KULON': $query->where('dusun', '=', 'SUMBERKOTES KULON'); break;
            case 'KASUN SUMBERKOTES WETAN': $query->where('dusun', '=', 'SUMBERKOTES WETAN'); break;
            default: break;
        }

        $penduduk_paginated = $query->paginate($items)->appends([
            'items' => $items,
            'rt'    => request('rt'),
            'rw'    => request('rw'),
            'q'     => request('q'),
            'dusun' => request('dusun'),
        ]);

        $jumlah_penduduk    = DB::table('penduduk')->distinct('nik')->count('nik');
        $jumlah_kk          = Penduduk::where('hub_keluarga', '=', 'Kepala Keluarga')->count();
        $jumlah_laki        = Penduduk::where('jenis_kelamin', '=', 'L')->count();
        $jumlah_perempuan   = Penduduk::where('jenis_kelamin', '=', 'P')->count();

        $balita = Penduduk::whereBetween('umur', [0,5])->count();
        $anak   = Penduduk::whereBetween('umur', [5,11])->count();
        $remaja = Penduduk::whereBetween('umur', [12,25])->count();
        $dewasa = Penduduk::whereBetween('umur', [26,45])->count();
        $lansia = Penduduk::whereBetween('umur', [46,65])->count();
        $manula = Penduduk::where('umur', '>=', 65)->count();

        $activityLogGroupBy = Activity::groupBy('causer_id')
            ->selectRaw('count(*) as total, causer_id')
            ->get();

        $activityLogs = Activity::all();
        $arrLog = [];
        foreach ($activityLogs as $log) {
            $i = 0;
            foreach ($log->properties['attributes'] as $index => $new) {
                $arrKeys = array_keys($log->properties['attributes']);
                $userName = User::find($log['causer_id'])->name;
                $penduduk = Penduduk::find($log['subject_id']);
                if ($penduduk == null) {
                    $namaPenduduk = 'Penduduk telah dihapus';
                }else{
                    $namaPenduduk = $penduduk->nama;
                }
                array_push($arrLog, [$namaPenduduk, $arrKeys[$i], $log->properties['old'][$index], $new, $userName, $log->updated_at, ]);
                $i++;
            }
        }

        $queryKegiatan = Kegiatan::query();
        $kegiatan_paginated = $queryKegiatan->paginate(10);

        $queryUsaha = Usaha::query();
        $usaha_paginated = $queryUsaha->paginate(10);

        $pekerjaans = Penduduk::groupBy('pekerjaan')
            ->select('pekerjaan', DB::raw('count(*) as total'))
            ->orderBy('total', 'desc')
            ->get();

        $labelPekerjaan = [];
        $arrPekerjaan = [];

        foreach ($pekerjaans as $pekerjaan) {
            array_push($labelPekerjaan, $pekerjaan['pekerjaan']);
            $arrPekerjaan[$pekerjaan['pekerjaan']] = $pekerjaan['total'];
        }

        foreach ($labelPekerjaan as $label) {
//            error_log($label);
        }
//        print_r($arrPekerjaan);
        foreach ($arrPekerjaan as $arr) {
//            error_log(key($arr));
//            error_log($arr);
//            foreach ($arr as $a) {
//                error_log($a);
//            }
        }

        foreach ($pekerjaans as $pekerjaan) {
//            error_log($pekerjaan['pekerjaan']);
//            error_log($pekerjaan['total']);
        }

        $view->with([
            'penduduks'             => $penduduk_paginated,
            'items'                 => $items,
            'jumlah_penduduk'       => $jumlah_penduduk,
            'user_name'             => $user_name,
            'jabatan'               => $jabatan,
            'activityLogGroupBy'    => $activityLogGroupBy,
            'arrLog'                => $arrLog,
            'jumlahKk'              => $jumlah_kk,
            'jenis_kelamin' => [
                'jumlah_laki'       => $jumlah_laki,
                'jumlah_perempuan'  => $jumlah_perempuan,
            ],
            'pencarian' => [
                'rt'                => request('rt'),
                'rw'                => request('rw'),
                'q'                 => request('q'),
                'dusun'             => request('dusun'),
            ],
            'kategori_umur' => [
                'balita'            => $balita,
                'anak'              => $anak,
                'remaja'            => $remaja,
                'dewasa'            => $dewasa,
                'lansia'            => $lansia,
                'manula'            => $manula,
            ],
            'kegiatans'             => $kegiatan_paginated,
            'usahas'                => $usaha_paginated,
            'pekerjaans'            => $pekerjaans,
            'labelPekerjaan'        => $labelPekerjaan,
        ]);
    }
}
