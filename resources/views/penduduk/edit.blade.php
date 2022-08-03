@extends('layouts.main')

@section('main-body')

    <div id= "sidebarState" state="aside-closed">

        @include('main.components.sidebar')

        <main class="d-flex flex-column position-absolute end-0 top-0 vw-80">

            @include('main.components.header')

            <section class="mx-5 align-self-center d-flex justify-content-center card p-5">
<!-- Success message -->
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif
{{--<form method="post" action="{{ route('penduduk.store') }}">--}}
<form class="form-penduduk pb-5" method="post" action="{{ route('penduduk.update', ['id_penduduk' => $penduduk->id]) }}">
    <!-- CROSS Site Request Forgery Protection -->
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="no_kk">NOMOR KK</label>
                <input type="text" class="form-control" value="{{ $penduduk->no_kk }}" placeholder="Nomor KK" id="no_kk" name="no_kk">
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
                <input type="text" class="form-control" value="{{ $penduduk->nik }}" placeholder="NIK" id="nik" name="nik">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="nama">NAMA</label>
                <input type="text" class="form-control" value="{{ $penduduk->nama }}" id="nama" placeholder="Nama" name="nama">
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="hub_keluarga">HUBUNGAN KELUARGA</label>
                <select class="selectpicker form-control" id="hub_keluarga" name="hub_keluarga">
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
                <select class="selectpicker form-control" id="status_kawin" name="status_kawin">
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
                <select class="selectpicker form-control" id="jenis_kelamin" name="jenis_kelamin">
                    <option selected value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="agama">AGAMA</label>
                <select class="selectpicker form-control" id="agama" name="agama">
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
                <input type="text" class="form-control" placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="tgl_lahir">TANGGAL LAHIR</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="rt">RT</label>
                <select class="selectpicker form-control" id="rt" name="rt">
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
                <select class="selectpicker form-control" id="rw" name="rw">
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
                <select class="selectpicker form-control" id="dusun" name="dusun">
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
                <select class="selectpicker form-control" id="status_pendidikan" name="status_pendidikan">
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
                <select class="selectpicker form-control" id="pendidikan" name="pendidikan">
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
                <input type="text" class="form-control" placeholder="Nama Ayah" id="nama_ayah" name="nama_ayah">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="nama_ibu">NAMA IBU</label>
                <input type="text" class="form-control" placeholder="Nama Ibu" id="nama_ibu" name="nama_ibu">
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->


    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nik_ayah">NIK AYAH</label>
                <input type="text" class="form-control" placeholder="NIK Ayah" id="nik_ayah" name="nik_ayah">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="nik_ibu">NIK IBU</label>
                <input type="text" class="form-control" placeholder="NIK Ibu" id="nik_ibu" name="nik_ibu">
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
                <input type="date" class="form-control" id="tgl_nikah" name="tgl_nikah">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="no_buku_nikah">NOMOR BUKU NIKAH</label>
                <input type="text" class="form-control" placeholder="Nomor Buku Nikah" id="no_buku_nikah" name="no_buku_nikah">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="kua">KUA</label>
                <input type="text" class="form-control" placeholder="KUA" id="kua" name="kua">
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="akte_lahir">AKTE KELAHIRAN /SURAT KENAL LAHIR</label>
                <input type="text" class="form-control" placeholder="Akte Kelahiran / Surat Kenal Lahir" id="akte_lahir" name="akte_lahir">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="no_bpjs">NOMOR PBI JK / BPJS</label>
                <input type="text" class="form-control" placeholder="Nomor PBI JK / BPJS" id="no_bpjs" name="no_bpjs">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="telepon">TELEPON</label>
                <input type="tel" class="form-control" placeholder="Telepon" id="telepon" name="telepon">
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="tgl_kematian">TANGGAL KEMATIAN</label>
                <input type="date" class="form-control" id="tgl_kematian" name="tgl_kematian">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="pukul_kematian">PUKUL KEMATIAN</label>
                <input type="time" class="form-control" id="pukul_kematian" name="pukul_kematian">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="ket_kematian">KETERANGAN KEMATIAN</label>
                <input type="text" class="form-control" placeholder="Keterangan Kematian" id="ket_kematian" name="ket_kematian">
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="jabatan">JABATAN</label>
                <input type="text" class="form-control" placeholder="Jabatan" id="jabatan" name="jabatan">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="no_ijazah">NOMOR IJAZAH / STB</label>
                <input type="text" class="form-control" placeholder="Nomor Ijazah / STB" id="no_ijazah" name="no_ijazah">
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="tgl_cerai">TANGGAL PERCERAIAN</label>
                <input type="date" class="form-control" id="tgl_cerai" name="tgl_cerai">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="no_akta_cerai">NOMOR AKTA CERAI</label>
                <input type="text" class="form-control" placeholder="Nomor Akta Cerai" id="no_akta_cerai" name="no_akta_cerai">
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="gol_darah">GOLONGAN DARAH</label>
                <select class="selectpicker form-control" id="gol_darah" name="gol_darah">
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
                <select class="selectpicker form-control" id="penyandang_cacat" name="penyandang_cacat">
                    <option selected value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                </select>
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <div class="row mt-3">
        <div class="col-md-4">
            <div class="form-group">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-4">
            <div class="form-group">
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-end">
            <input type="button" href="/dashboard" value="Hapus" class="btn btn-danger btn-lg fs-3 px-5 me-5" style="color: white;">
            <input type="submit" name="send" value="Simpan" class="btn btn-success btn-lg fs-3 px-5">
            
        </div>
        <!--  col-md-6   -->
    </div>
    <!--  row   -->

</form>
</div>

</section>

<footer class="mt-5">

</footer>
</main>
</div>

@endsection

