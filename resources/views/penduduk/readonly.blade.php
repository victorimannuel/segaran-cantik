<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/form-penduduk.css') }}">
</head>
<body>
    <div class="w-75">
<!-- Success message -->

@if(Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif
<form method="post" action="{{ route('penduduk.store') }}">
<<<<<<< HEAD
<!-- CROSS Site Request Forgery Protection -->
@csrf
<h2>Form Data Penduduk Desa Segaran</h2>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="no_kk">NOMOR KK</label>
            <input type="text" class="form-control" value="{{ $penduduk->no_kk }}" readonly placeholder="Nomor KK" id="no_kk" name="no_kk">
            <!-- Error -->
            @if ($errors->has('no_kk'))
                <div class="error">
                    {{ $errors->first('no_kk') }}
=======
    <!-- CROSS Site Request Forgery Protection -->
    @csrf
    <h2>Form Data Penduduk Desa Segaran</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="no_kk">NOMOR KK</label>
                <input type="text" class="form-control" value="{{ $penduduk->no_kk }}" readonly placeholder="Nomor KK" id="no_kk" name="no_kk">
                <!-- Error -->
                @if ($errors->has('no_kk'))
                    <div class="error">
                        {{ $errors->first('no_kk') }}
                    </div>
                @endif
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
            </div>
        </div>
        <!--  col-md-6   -->
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" value="{{ $penduduk->nik }}" readonly placeholder="NIK" id="nik" name="nik">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="nama">NAMA</label>
                <input type="text" class="form-control" value="{{ $penduduk->nama }}" readonly id="nama" placeholder="Nama" name="nama">
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="hub_keluarga">HUBUNGAN KELUARGA</label>
                <select class="selectpicker form-control" readonly id="hub_keluarga" name="hub_keluarga" style="cursor: not-allowed;">
                    <option value="Kepala Keluarga" {{$penduduk->hub_keluarga == 'Kepala keluarga' ? 'selected':''}}>Kepala Keluarga</option>
                    <option value="Ibu" {{$penduduk->hub_keluarga == 'Ibu' ? 'selected':''}}>Ibu</option>
                    <option value="Anak" {{$penduduk->hub_keluarga == 'Anak' ? 'selected':''}}>Anak</option>
                    <option value="Suami" {{$penduduk->hub_keluarga == 'Suami' ? 'selected':''}}>Suami</option>
                    <option value="Istri" {{$penduduk->hub_keluarga == 'Istri' ? 'selected':''}}>Istri</option>
                    <option value="Saudara" {{$penduduk->hub_keluarga == 'Saudara' ? 'selected':''}}>Saudara</option>
                </select>
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="status_kawin">STATUS PERKAWINAN</label>
                <select class="selectpicker form-control" readonly id="status_kawin" name="status_kawin" style="cursor: not-allowed;">
                    <option selected value="Belum Kawin">Belum Kawin</option>
                    <option value="Kawin">Kawin</option>
                </select>
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="jenis_kelamin">JENIS KELAMIN</label>
                <select class="selectpicker form-control" readonly id="jenis_kelamin" name="jenis_kelamin" style="cursor: not-allowed;">
                    <option selected value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="agama">AGAMA</label>
                <select class="selectpicker form-control" readonly id="agama" name="agama" style="cursor: not-allowed;">
                    <option selected value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="tempat_lahir">TEMPAT LAHIR</label>
                <input type="text" class="form-control" value="{{ $penduduk->tempat_lahir }}" readonly placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="tgl_lahir">TANGGAL LAHIR</label>
                <input type="date" class="form-control" value="{{ $penduduk->tgl_lahir }}" readonly id="tgl_lahir" name="tgl_lahir">
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="rt">RT</label>
                <select class="selectpicker form-control" readonly id="rt" name="rt" style="cursor: not-allowed;">
                    <option selected value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="rw">RW</label>
                <select class="selectpicker form-control" readonly id="rw" name="rw" style="cursor: not-allowed;">
                    <option selected value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="dusun">DUSUN</label>
                <select class="selectpicker form-control" readonly id="dusun" name="dusun" style="cursor: not-allowed;">
                    <option selected value="KRAJAN">KRAJAN</option>
                    <option value="SUMBERKOTES WETAN">SUMBERKOTES WETAN</option>
                    <option value="PUTAT">PUTAT</option>
                </select>
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <hr/>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="status_pendidikan">STATUS PENDIDIKAN</label>
                <select class="selectpicker form-control" readonly id="status_pendidikan" name="status_pendidikan" style="cursor: not-allowed;">
                    <option selected value="BELUM TAMAT">BELUM TAMAT</option>
                    <option value="TAMAT">TAMAT</option>
                    <option value="BELUM SEKOLAH">BELUM SEKOLAH</option>
                </select>
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="pendidikan">PENDIDIKAN</label>
                <select class="selectpicker form-control" readonly id="pendidikan" name="pendidikan" style="cursor: not-allowed;">
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option selected value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nama_ayah">NAMA AYAH</label>
                <input type="text" class="form-control"  value="{{ $penduduk->nama_ayah }}"readonly placeholder="Nama Ayah" id="nama_ayah" name="nama_ayah">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="nama_ibu">NAMA IBU</label>
                <input type="text" class="form-control" value="{{ $penduduk->nama_ibu }}" readonly placeholder="Nama Ibu" id="nama_ibu" name="nama_ibu">
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->


    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nik_ayah">NIK AYAH</label>
                <input type="text" class="form-control" value="{{ $penduduk->nik_ayah }}" readonly placeholder="NIK Ayah" id="nik_ayah" name="nik_ayah">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="nik_ibu">NIK IBU</label>
                <input type="text" class="form-control" value="{{ $penduduk->nik_ibu }}" readonly placeholder="NIK Ibu" id="nik_ibu" name="nik_ibu">
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <hr/>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="tgl_nikah">TANGGAL NIKAH</label>
                <input type="date" class="form-control" value="{{ $penduduk->nik_ibu }}" readonly id="tgl_nikah" name="tgl_nikah">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="no_buku_nikah">NOMOR BUKU NIKAH</label>
                <input type="text" class="form-control" value="{{ $penduduk->no_buku_nikah }}" readonly placeholder="Nomor Buku Nikah" id="no_buku_nikah" name="no_buku_nikah">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="kua">KUA</label>
                <input type="text" class="form-control" value="{{ $penduduk->kua }}" readonly placeholder="KUA" id="kua" name="kua">
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="akte_lahir">AKTE KELAHIRAN /SURAT KENAL LAHIR</label>
                <input type="text" class="form-control" value="{{ $penduduk->akte_lahir }}" readonly placeholder="Akte Kelahiran / Surat Kenal Lahir" id="akte_lahir" name="akte_lahir">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="no_bpjs">NOMOR PBI JK / BPJS</label>
                <input type="text" class="form-control" value="{{ $penduduk->no_bpjs }}" readonly placeholder="Nomor PBI JK / BPJS" id="no_bpjs" name="no_bpjs">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="telepon">TELEPON</label>
                <input type="tel" class="form-control" value="{{ $penduduk->telepon }}" readonly placeholder="Telepon" id="telepon" name="telepon">
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="tgl_kematian">TANGGAL KEMATIAN</label>
                <input type="date" class="form-control" value="{{ $penduduk->tgl_kematian }}" readonly id="tgl_kematian" name="tgl_kematian">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="pukul_kematian">PUKUL KEMATIAN</label>
                <input type="time" class="form-control" value="{{ $penduduk->pukul_kematian }}" readonly id="pukul_kematian" name="pukul_kematian">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="ket_kematian">KETERANGAN KEMATIAN</label>
                <input type="text" class="form-control" readonly value="{{ $penduduk->ket_kematian }}" placeholder="Keterangan Kematian" id="ket_kematian" name="ket_kematian">
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="jabatan">JABATAN</label>
                <input type="text" class="form-control" value="{{ $penduduk->jabatan }}" readonly placeholder="Jabatan" id="jabatan" name="jabatan">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="no_ijazah">NOMOR IJAZAH / STB</label>
                <input type="text" class="form-control" value="{{ $penduduk->no_ijazah }}" readonly placeholder="Nomor Ijazah / STB" id="no_ijazah" name="no_ijazah">
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="tgl_cerai">TANGGAL PERCERAIAN</label>
                <input type="date" class="form-control" value="{{ $penduduk->tgl_cerai }}" readonly id="tgl_cerai" name="tgl_cerai">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="no_akta_cerai">NOMOR AKTA CERAI</label>
                <input type="text" class="form-control" value="{{ $penduduk->no_akta_cerai }}" readonly placeholder="Nomor Akta Cerai" id="no_akta_cerai" name="no_akta_cerai">
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="gol_darah">GOLONGAN DARAH</label>
                <select class="selectpicker form-control" value="{{ $penduduk->gol_darah }}" readonly id="gol_darah" name="gol_darah" style="cursor: not-allowed;">
                    <option selected value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="penyandang_cacat">PENYANDANG CACAT</label>
                <select class="selectpicker form-control" value="{{ $penduduk->penyandang_cacat }}" readonly id="penyandang_cacat" name="penyandang_cacat" style="cursor: not-allowed;">
                    <option selected value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                </select>
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-4">
            <div class="form-group">
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                    </div>
>>>>>>> 42b6459d8b402d867ceaddd3545e0419ede9ccc4
                </div>
            @endif
        </div>
    </div>
    <!--  col-md-6   -->
    <div class="col-md-6">
        <div class="form-group">
        </div>
    </div>
    <!--  col-md-6   -->
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" value="{{ $penduduk->nik }}" readonly placeholder="NIK" id="nik" name="nik">
        </div>
    </div>
    <!--  col-md-6   -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="nama">NAMA</label>
            <input type="text" class="form-control" value="{{ $penduduk->nama }}" readonly id="nama" placeholder="Nama" name="nama">
        </div>
    </div>
    <!--  col-md-6   -->
</div>
<!--  row   -->

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="hub_keluarga">HUBUNGAN KELUARGA</label>
            <select class="selectpicker form-control" readonly id="hub_keluarga" name="hub_keluarga">
                <option value="Kepala Keluarga" {{$penduduk->hub_keluarga == 'Kepala keluarga' ? 'selected':''}}>Kepala Keluarga</option>
                <option value="Ibu" {{$penduduk->hub_keluarga == 'Ibu' ? 'selected':''}}>Ibu</option>
                <option value="Anak" {{$penduduk->hub_keluarga == 'Anak' ? 'selected':''}}>Anak</option>
                <option value="Suami" {{$penduduk->hub_keluarga == 'Suami' ? 'selected':''}}>Suami</option>
                <option value="Istri" {{$penduduk->hub_keluarga == 'Istri' ? 'selected':''}}>Istri</option>
                <option value="Saudara" {{$penduduk->hub_keluarga == 'Saudara' ? 'selected':''}}>Saudara</option>
            </select>
        </div>
    </div>
    <!--  col-md-6   -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="status_kawin">STATUS PERKAWINAN</label>
            <select class="selectpicker form-control" readonly id="status_kawin" name="status_kawin">
                <option selected value="Belum Kawin">Belum Kawin</option>
                <option value="Kawin">Kawin</option>
            </select>
        </div>
    </div>
    <!--  col-md-6   -->
</div>
<!--  row   -->

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="jenis_kelamin">JENIS KELAMIN</label>
            <select class="selectpicker form-control" readonly id="jenis_kelamin" name="jenis_kelamin">
                <option selected value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
    </div>
    <!--  col-md-6   -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="agama">AGAMA</label>
            <select class="selectpicker form-control" readonly id="agama" name="agama">
                <option selected value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
        </div>
    </div>
    <!--  col-md-6   -->
</div>
<!--  row   -->

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="tempat_lahir">TEMPAT LAHIR</label>
            <input type="text" class="form-control" value="{{ $penduduk->tempat_lahir }}" readonly placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir">
        </div>
    </div>
    <!--  col-md-6   -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="tgl_lahir">TANGGAL LAHIR</label>
            <input type="date" class="form-control" value="{{ $penduduk->tgl_lahir }}" readonly id="tgl_lahir" name="tgl_lahir">
        </div>
    </div>
    <!--  col-md-6   -->
</div>
<!--  row   -->

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="rt">RT</label>
            <select class="selectpicker form-control" readonly id="rt" name="rt">
                <option selected value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </div>
    </div>
    <!--  col-md-6   -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="rw">RW</label>
            <select class="selectpicker form-control" readonly id="rw" name="rw">
                <option selected value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </div>
    </div>
    <!--  col-md-6   -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="dusun">DUSUN</label>
            <select class="selectpicker form-control" readonly id="dusun" name="dusun">
                <option selected value="KRAJAN">KRAJAN</option>
                <option value="SUMBERKOTES WETAN">SUMBERKOTES WETAN</option>
                <option value="PUTAT">PUTAT</option>
            </select>
        </div>
    </div>
    <!--  col-md-6   -->
</div>
<!--  row   -->

<hr/>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="status_pendidikan">STATUS PENDIDIKAN</label>
            <select class="selectpicker form-control" readonly id="status_pendidikan" name="status_pendidikan">
                <option selected value="BELUM TAMAT">BELUM TAMAT</option>
                <option value="TAMAT">TAMAT</option>
                <option value="BELUM SEKOLAH">BELUM SEKOLAH</option>
            </select>
        </div>
    </div>
    <!--  col-md-6   -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="pendidikan">PENDIDIKAN</label>
            <select class="selectpicker form-control" readonly id="pendidikan" name="pendidikan">
                <option value="D1">D1</option>
                <option value="D2">D2</option>
                <option value="D3">D3</option>
                <option selected value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select>
        </div>
    </div>
    <!--  col-md-6   -->
</div>
<!--  row   -->

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="nama_ayah">NAMA AYAH</label>
            <input type="text" class="form-control"  value="{{ $penduduk->nama_ayah }}"readonly placeholder="Nama Ayah" id="nama_ayah" name="nama_ayah">
        </div>
    </div>
    <!--  col-md-6   -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="nama_ibu">NAMA IBU</label>
            <input type="text" class="form-control" value="{{ $penduduk->nama_ibu }}" readonly placeholder="Nama Ibu" id="nama_ibu" name="nama_ibu">
        </div>
    </div>
    <!--  col-md-6   -->
</div>
<!--  row   -->


<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="nik_ayah">NIK AYAH</label>
            <input type="text" class="form-control" value="{{ $penduduk->nik_ayah }}" readonly placeholder="NIK Ayah" id="nik_ayah" name="nik_ayah">
        </div>
    </div>
    <!--  col-md-6   -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="nik_ibu">NIK IBU</label>
            <input type="text" class="form-control" value="{{ $penduduk->nik_ibu }}" readonly placeholder="NIK Ibu" id="nik_ibu" name="nik_ibu">
        </div>
    </div>
    <!--  col-md-6   -->
</div>
<!--  row   -->

<hr/>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="tgl_nikah">TANGGAL NIKAH</label>
            <input type="date" class="form-control" value="{{ $penduduk->nik_ibu }}" readonly id="tgl_nikah" name="tgl_nikah">
        </div>
    </div>
    <!--  col-md-6   -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="no_buku_nikah">NOMOR BUKU NIKAH</label>
            <input type="text" class="form-control" value="{{ $penduduk->no_buku_nikah }}" readonly placeholder="Nomor Buku Nikah" id="no_buku_nikah" name="no_buku_nikah">
        </div>
    </div>
    <!--  col-md-6   -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="kua">KUA</label>
            <input type="text" class="form-control" value="{{ $penduduk->kua }}" readonly placeholder="KUA" id="kua" name="kua">
        </div>
    </div>
    <!--  col-md-6   -->
</div>
<!--  row   -->

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="akte_lahir">AKTE KELAHIRAN /SURAT KENAL LAHIR</label>
            <input type="text" class="form-control" value="{{ $penduduk->akte_lahir }}" readonly placeholder="Akte Kelahiran / Surat Kenal Lahir" id="akte_lahir" name="akte_lahir">
        </div>
    </div>
    <!--  col-md-6   -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="no_bpjs">NOMOR PBI JK / BPJS</label>
            <input type="text" class="form-control" value="{{ $penduduk->no_bpjs }}" readonly placeholder="Nomor PBI JK / BPJS" id="no_bpjs" name="no_bpjs">
        </div>
    </div>
    <!--  col-md-6   -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="telepon">TELEPON</label>
            <input type="tel" class="form-control" value="{{ $penduduk->telepon }}" readonly placeholder="Telepon" id="telepon" name="telepon">
        </div>
    </div>
    <!--  col-md-6   -->
</div>
<!--  row   -->

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="tgl_kematian">TANGGAL KEMATIAN</label>
            <input type="date" class="form-control" value="{{ $penduduk->tgl_kematian }}" readonly id="tgl_kematian" name="tgl_kematian">
        </div>
    </div>
    <!--  col-md-6   -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="pukul_kematian">PUKUL KEMATIAN</label>
            <input type="time" class="form-control" value="{{ $penduduk->pukul_kematian }}" readonly id="pukul_kematian" name="pukul_kematian">
        </div>
    </div>
    <!--  col-md-6   -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="ket_kematian">KETERANGAN KEMATIAN</label>
            <input type="text" class="form-control" readonly value="{{ $penduduk->ket_kematian }}" placeholder="Keterangan Kematian" id="ket_kematian" name="ket_kematian">
        </div>
    </div>
    <!--  col-md-6   -->
</div>
<!--  row   -->

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="jabatan">JABATAN</label>
            <input type="text" class="form-control" value="{{ $penduduk->jabatan }}" readonly placeholder="Jabatan" id="jabatan" name="jabatan">
        </div>
    </div>
    <!--  col-md-6   -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="no_ijazah">NOMOR IJAZAH / STB</label>
            <input type="text" class="form-control" value="{{ $penduduk->no_ijazah }}" readonly placeholder="Nomor Ijazah / STB" id="no_ijazah" name="no_ijazah">
        </div>
    </div>
    <!--  col-md-6   -->
</div>
<!--  row   -->

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="tgl_cerai">TANGGAL PERCERAIAN</label>
            <input type="date" class="form-control" value="{{ $penduduk->tgl_cerai }}" readonly id="tgl_cerai" name="tgl_cerai">
        </div>
    </div>
    <!--  col-md-6   -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="no_akta_cerai">NOMOR AKTA CERAI</label>
            <input type="text" class="form-control" value="{{ $penduduk->no_akta_cerai }}" readonly placeholder="Nomor Akta Cerai" id="no_akta_cerai" name="no_akta_cerai">
        </div>
    </div>
    <!--  col-md-6   -->
</div>
<!--  row   -->

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="gol_darah">GOLONGAN DARAH</label>
            <select class="selectpicker form-control" value="{{ $penduduk->gol_darah }}" readonly id="gol_darah" name="gol_darah">
                <option selected value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>
    </div>
    <!--  col-md-6   -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="penyandang_cacat">PENYANDANG CACAT</label>
            <select class="selectpicker form-control" value="{{ $penduduk->penyandang_cacat }}" readonly id="penyandang_cacat" name="penyandang_cacat">
                <option selected value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
            </select>
        </div>
    </div>
    <!--  col-md-6   -->
</div>
<!--  row   -->

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
        </div>
    </div>
    <!--  col-md-6   -->
    <div class="col-md-4">
        <div class="form-group">
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                </div>
            </div>
            <!--  col-md-6   -->
            <div class="col-md-4">
                <div class="form-group">
                    <button type="button" class="btn btn-warning btn-block" style="color: white;"
                            onclick="window.location='{{ route('main.dashboard')}}'"
                    >
                        Kembali
                    </button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <button type="button" class="btn btn-success btn-block"
                            onclick="window.location='{{ route('edit-penduduk.show', ['id_penduduk' => $penduduk->id])}}'"
                    >
                        Edit
                    </button>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
    <!--  col-md-6   -->
</div>
<!--  row   -->

</form>
</div>

@include('penduduk.log')
</div>
=======
    <!--  row   -->
</form>
</div>
<div>
    <table class="table-bordered">
        @if(isset($activityLogs))
            @foreach($activityLogs as $log)
                @php
                    $properties = json_decode($log->properties, true);
                @endphp
                <tr>
                    <td>
                        {{ $log->description}} - {{ $log->updated_at->format('l jS F Y h:i:s A')}}
                    </td>
                    <td>
                        <table class="table-bordered">
                        @foreach($properties as $prop)
                            <td>
                                @foreach($prop as $p)
                                    @if($loop->last)
                                        <tr>{{$p}} -></tr>
                                    @else
                                        <tr>{{$p}}</tr>
                                    @endif
                                @endforeach
                            </td>
                        @endforeach
                        </table>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>
</div>
</form>
<script>
    var selectable = [
        'hub_keluarga',
        'status_kawin',
        'jenis_kelamin',
        'agama',
        'rt',
        'rw',
        'dusun',
        'status_pendidikan',
        'pendidikan',
        'gol_darah',
        'penyandang_cacat',
    ];
    for (let i = 0; i < selectable.length; i++) {
        document.getElementById(selectable[i]).prop("readonly", isReadOnly);
        document.getElementById(selectable[i]).toggleClass("my-read-only-class", isReadOnly);
        document.getElementById(selectable[i]).find("option").prop("hidden", isReadOnly);
    }
</script>
>>>>>>> 42b6459d8b402d867ceaddd3545e0419ede9ccc4
</body>
</html>
