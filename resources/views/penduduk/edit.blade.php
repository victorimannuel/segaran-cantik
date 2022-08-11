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

                @include('sweetalert::alert')
                <form name="formPenduduk" class="form-penduduk pb-5" method="post" action="{{ route('penduduk.update', ['id_penduduk' => $penduduk->id]) }}">
                    <!-- CROSS Site Request Forgery Protection -->
                    @csrf
                    <sec class="form-group">
                        <div class="d-flex flex-row align-items-center pb-3">
                            <span class="back-button d-flex flex-row" onclick="window.location='{{ route('penduduk.read', ['id_penduduk' => $penduduk->id])}}'" style="cursor: pointer;">
                                {{-- <span class="back-button d-flex flex-row" onclick="window.location='{{ view('main.dashboard')}}'" style="cursor: pointer;">--}}
                                <a>
                                <img src="{{ asset("/assets/img/icons/back.png") }}" class="" width=30 alt="">
                                </a>
                                <p class="my-0 px-3 fs-2">Kembali</p>
                            </span>
                        </div>

                        <!-- Error -->
                        @if ($errors->has('no_kk'))
                            <div class="error">
                                {{ $errors->first('no_kk') }}
                            </div>
                        @endif

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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_kk">VALIDASI</label>
                                    <input type="text" class="form-control" value="{{ $penduduk->validasi }}" placeholder="Validasi" id="validasi" name="validasi">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" class="form-control" value="{{ $penduduk->nik }}" placeholder="NIK" id="nik" name="nik">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">NAMA</label>
                                    <input type="text" class="form-control" value="{{ $penduduk->nama }}" id="nama" placeholder="Nama" name="nama">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hub_keluarga">HUBUNGAN KELUARGA</label>
                                    <select class="selectpicker form-control" id="hub_keluarga" name="hub_keluarga">
                                        <option value="" selected>-- HUBUNGAN KELUARGA --</option>
                                        <option value="Kepala Keluarga" {{$penduduk->hub_keluarga == 'Kepala Keluarga' ? 'selected': ''}}>Kepala Keluarga</option>
                                        <option value="Suami" {{$penduduk->hub_keluarga == 'Suami' ? 'selected':''}}>Suami</option>
                                        <option value="Istri" {{$penduduk->hub_keluarga == 'Istri' ? 'selected':''}}>Istri</option>
                                        <option value="Anak" {{$penduduk->hub_keluarga == 'Anak' ? 'selected':''}}>Anak</option>
                                        <option value="Menantu" {{$penduduk->hub_keluarga == 'Menantu' ? 'selected':''}}>Menantu</option>
                                        <option value="Cucu" {{$penduduk->hub_keluarga == 'Cucu' ? 'selected':''}}>Cucu</option>
                                        <option value="Orang Tua" {{$penduduk->hub_keluarga == 'Orang Tua' ? 'selected':''}}>Orang Tua</option>
                                        <option value="Mertua" {{$penduduk->hub_keluarga == 'Mertua' ? 'selected':''}}>Mertua</option>
                                        <option value="Famili" {{$penduduk->hub_keluarga == 'Famili' ? 'selected':''}}>Famili</option>
                                        <option value="Pembantu" {{$penduduk->hub_keluarga == 'Pembantu' ? 'selected':''}}>Pembantu</option>
                                        <option value="Lainnya" {{$penduduk->hub_keluarga == 'Lainnya' ? 'selected':''}}>Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status_kawin">STATUS PERKAWINAN</label>
                                    <select class="selectpicker form-control" id="status_kawin" name="status_kawin">
                                        <option selected value="">-- STATUS PERKAWINAN --</option>
                                        <option value="Belum Kawin" {{$penduduk->status_kawin == 'Belum Kawin' ? 'selected': ''}}>Belum Kawin</option>
                                        <option value="Kawin" {{$penduduk->status_kawin == 'Kawin' ? 'selected': ''}}>Kawin</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jenis_kelamin">JENIS KELAMIN</label>
                                    <select class="selectpicker form-control" id="jenis_kelamin" name="jenis_kelamin">
                                        <option selected value="">-- JENIS KELAMIN --</option>
                                        <option value="L" {{$penduduk->jenis_kelamin == 'L' ? 'selected': ''}}>Laki-laki</option>
                                        <option value="P" {{$penduduk->jenis_kelamin == 'P' ? 'selected': ''}}>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="agama">AGAMA</label>
                                    <select class="selectpicker form-control" id="agama" name="agama">
                                        <option selected value="">-- AGAMA --</option>
                                        <option value="Islam" {{$penduduk->agama == 'Islam' ? 'selected': ''}}>Islam</option>
                                        <option value="Kristen" {{$penduduk->agama == 'Kristen' ? 'selected': ''}}>Kristen</option>
                                        <option value="Katolik" {{$penduduk->agama == 'Katolik' ? 'selected': ''}}>Katolik</option>
                                        <option value="Hindu" {{$penduduk->agama == 'Hindu' ? 'selected': ''}}>Hindu</option>
                                        <option value="Buddha" {{$penduduk->agama == 'Buddha' ? 'selected': ''}}>Buddha</option>
                                        <option value="Konghucu" {{$penduduk->agama == 'Konghucu' ? 'selected': ''}}>Konghucu</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tempat_lahir">TEMPAT LAHIR</label>
                                    <input type="text" class="form-control" value="{{ $penduduk->tempat_lahir }}" placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tgl_lahir">TANGGAL LAHIR</label>
                                    <input type="date" class="form-control" value="{{ $penduduk->tgl_lahir }}" id="tgl_lahir" name="tgl_lahir">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    @php
                                        $today = date('Y-m-d');
                                        $tgl_lahir = $penduduk->tgl_lahir;
                                        $umurCalculated = date_diff(date_create($tgl_lahir), date_create($today))->format('%y');
                                    @endphp
                                    <label for="umur">UMUR</label>
                                    <input type="number" class="form-control" value="{{ $umurCalculated }}" id="umur" name="umur">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="rt">RT</label>
                                    <select class="selectpicker form-control" id="rt" name="rt">
                                        <option selected value="">-- RT --</option>
                                        @for ($i = 1; $i <= 30; $i++)
                                            <option {{$penduduk->rt == $i ? 'selected': ''}} value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="rw">RW</label>
                                    <select class="selectpicker form-control" id="rw" name="rw">
                                        <option selected value="">-- RW --</option>
                                        @for ($i = 1; $i <= 9; $i++)
                                            <option {{$penduduk->rw == $i ? 'selected': ''}} value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dusun">DUSUN</label>
                                    <select class="selectpicker form-control" id="dusun" name="dusun">
                                        <option selected value="">-- DUSUN --</option>
                                        <option {{$penduduk->dusun == 'KRAJAN' ? 'selected': ''}} value="KRAJAN">KRAJAN</option>
                                        <option {{$penduduk->dusun == 'PUTAT' ? 'selected': ''}} value="PUTAT">PUTAT</option>
                                        <option {{$penduduk->dusun == 'SUMBERBANTENG' ? 'selected': ''}} value="SUMBERBANTENG">SUMBERBANTENG</option>
                                        <option {{$penduduk->dusun == 'SUMBERJABON' ? 'selected': ''}} value="SUMBERJABON">SUMBERJABON</option>
                                        <option {{$penduduk->dusun == 'SUMBERKOTES WETAN' ? 'selected': ''}} value="SUMBERKOTES WETAN">SUMBERKOTES WETAN</option>
                                        <option {{$penduduk->dusun == 'SUMBERKOTES KULON' ? 'selected': ''}} value="SUMBERKOTES KULON">SUMBERKOTES KULON</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <hr/>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    @php
                                        $arrStatusPendidikan = [
                                            'BELUM TAMAT', 'TAMAT', 'BELUM SEKOLAH',
                                        ];
                                    @endphp
                                    <label for="status_pendidikan">STATUS PENDIDIKAN</label>
                                    <select class="selectpicker form-control" id="status_pendidikan" name="status_pendidikan">
                                        <option selected value="">-- STATUS PENDIDIKAN --</option>
                                        <option {{$penduduk->status_pendidikan == 'BELUM TAMAT' ? 'selected': ''}} value="BELUM TAMAT">BELUM TAMAT</option>
                                        <option {{$penduduk->status_pendidikan == 'TAMAT' ? 'selected': ''}} value="TAMAT">TAMAT</option>
                                        <option {{$penduduk->status_pendidikan == 'BELUM SEKOLAH' ? 'selected': ''}} value="BELUM SEKOLAH">BELUM SEKOLAH</option>
                                        @if(in_array($penduduk->status_pendidikan, $arrStatusPendidikan) == false)
                                            <option selected value="{{ $penduduk->status_pendidikan }}">{{ $penduduk->status_pendidikan }}</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    @php
                                        $arrPendidikan = [
                                            'TIDAK/BELUM SEKOLAH', 'BELUM TAMAT SD/Sederajat', 'TAMAT SD/Sederajat',
                                            'SLTP/Sederajat', 'SLTA/Sederajat', 'D1',
                                            'D2', 'D3', 'D4',
                                            'S1', 'S2', 'S3',
                                        ];
                                    @endphp
                                    <label for="pendidikan">PENDIDIKAN</label>
                                    <select class="selectpicker form-control" id="pendidikan" name="pendidikan">
                                        <option selected value="">-- PENDIDIKAN --</option>
                                        <option {{$penduduk->pendidikan == 'TIDAK/BELUM SEKOLAH' ? 'selected': ''}} value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                                        <option {{$penduduk->pendidikan == 'BELUM TAMAT SD/Sederajat' ? 'selected': ''}} value="BELUM TAMAT SD/Sederajat">BELUM TAMAT SD/Sederajat</option>
                                        <option {{$penduduk->pendidikan == 'TAMAT SD/Sederajat' ? 'selected': ''}} value="TAMAT SD/Sederajat">TAMAT SD/Sederajat</option>
                                        <option {{$penduduk->pendidikan == 'SLTP/Sederajat' ? 'selected': ''}} value="SLTP/Sederajat">SLTP/Sederajat</option>
                                        <option {{$penduduk->pendidikan == 'SLTA/Sederajat' ? 'selected': ''}} value="SLTA/Sederajat">SLTA/Sederajat</option>
                                        <option {{$penduduk->pendidikan == 'D1' ? 'selected': ''}} value="D1">D1</option>
                                        <option {{$penduduk->pendidikan == 'D2' ? 'selected': ''}} value="D2">D2</option>
                                        <option {{$penduduk->pendidikan == 'D3' ? 'selected': ''}} value="D3">D3</option>
                                        <option {{$penduduk->pendidikan == 'D4' ? 'selected': ''}} value="D4">D4</option>
                                        <option {{$penduduk->pendidikan == 'S1' ? 'selected': ''}} value="S1">S1</option>
                                        <option {{$penduduk->pendidikan == 'S2' ? 'selected': ''}} value="S2">S2</option>
                                        <option {{$penduduk->pendidikan == 'S3' ? 'selected': ''}} value="S3">S3</option>
                                        @if(in_array($penduduk->pendidikan, $arrPendidikan) == false)
                                            <option selected value="{{ $penduduk->pendidikan }}">{{ $penduduk->pendidikan }}</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        @php
                                            $arrPekerjaan = [
                                                'PEDAGANG', 'WIRASWASTA', 'PERANGKAT DESA',
                                                'PELAJAR/MAHASISWA', 'BURUH TANI/PERKEBUNAN', 'PETANI/PEKEBUN',
                                                'KARYAWAN SWASTA', 'KARYAWAN BUMN', 'KARYAWAN HONORER',
                                                'TENTARA NASIONAL INDONESIA', 'BURUH HARIAN LEPAS', 'KONSTRUKSI',
                                                'PETERNAK', 'PERAWAT', 'TUKANG JAHIT',
                                                'TUKANG KAYU', 'PEGAWAI NEGERI SIPIL', 'SOPIR',
                                                'DOKTER', 'INDUSTRI', 'TRANSPORTASI',
                                                'PENSIUNAN', 'GURU', 'MENGURUS RUMAH TANGGA',
                                                'BELUM/TIDAK BEKERJA', 'LAINNYA',
                                            ];
                                        @endphp
                                        <label for="pekerjaan">PEKERJAAN</label>
                                        <select class="selectpicker form-control" id="pekerjaan" name="pekerjaan">
                                            <option selected value="">-- PEKERJAAN --</option>
                                            <option {{$penduduk->pekerjaan == 'PEDAGANG' ? 'selected': ''}} value="PEDAGANG">PEDAGANG</option>
                                            <option {{$penduduk->pekerjaan == 'WIRASWASTA' ? 'selected': ''}} value="WIRASWASTA">WIRASWASTA</option>
                                            <option {{$penduduk->pekerjaan == 'PERANGKAT DESA' ? 'selected': ''}} value="PERANGKAT DESA">PERANGKAT DESA</option>
                                            <option {{$penduduk->pekerjaan == 'PELAJAR/MAHASISWA' ? 'selected': ''}} value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                            <option {{$penduduk->pekerjaan == 'BURUH TANI/PERKEBUNAN' ? 'selected': ''}} value="BURUH TANI/PERKEBUNAN">BURUH TANI/PERKEBUNAN</option>
                                            <option {{$penduduk->pekerjaan == 'PETANI/PEKEBUN' ? 'selected': ''}} value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                            <option {{$penduduk->pekerjaan == 'KARYAWAN SWASTA' ? 'selected': ''}} value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                            <option {{$penduduk->pekerjaan == 'KARYAWAN BUMN' ? 'selected': ''}} value="KARYAWAN BUMN">KARYAWAN BUMN</option>
                                            <option {{$penduduk->pekerjaan == 'KARYAWAN HONORER' ? 'selected': ''}} value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                            <option {{$penduduk->pekerjaan == 'TENTARA NASIONAL INDONESIA' ? 'selected': ''}} value="TENTARA NASIONAL INDONESIA">TENTARA NASIONAL INDONESIA</option>
                                            <option {{$penduduk->pekerjaan == 'BURUH HARIAN LEPAS' ? 'selected': ''}} value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                            <option {{$penduduk->pekerjaan == 'KONSTRUKSI' ? 'selected': ''}} value="KONSTRUKSI">KONSTRUKSI</option>
                                            <option {{$penduduk->pekerjaan == 'PETERNAK' ? 'selected': ''}} value="PETERNAK">PETERNAK</option>
                                            <option {{$penduduk->pekerjaan == 'PERAWAT' ? 'selected': ''}} value="PERAWAT">PERAWAT</option>
                                            <option {{$penduduk->pekerjaan == 'TUKANG JAHIT' ? 'selected': ''}} value="TUKANG JAHIT">TUKANG JAHIT</option>
                                            <option {{$penduduk->pekerjaan == 'TUKANG KAYU' ? 'selected': ''}} value="TUKANG KAYU">TUKANG KAYU</option>
                                            <option {{$penduduk->pekerjaan == 'PEGAWAI NEGERI SIPIL' ? 'selected': ''}} value="PEGAWAI NEGERI SIPIL">PEGAWAI NEGERI SIPIL</option>
                                            <option {{$penduduk->pekerjaan == 'SOPIR' ? 'selected': ''}} value="SOPIR">SOPIR</option>
                                            <option {{$penduduk->pekerjaan == 'DOKTER' ? 'selected': ''}} value="DOKTER">DOKTER</option>
                                            <option {{$penduduk->pekerjaan == 'INDUSTRI' ? 'selected': ''}} value="INDUSTRI">INDUSTRI</option>
                                            <option {{$penduduk->pekerjaan == 'TRANSPORTASI' ? 'selected': ''}} value="TRANSPORTASI">TRANSPORTASI</option>
                                            <option {{$penduduk->pekerjaan == 'PENSIUNAN' ? 'selected': ''}} value="PENSIUNAN">PENSIUNAN</option>
                                            <option {{$penduduk->pekerjaan == 'GURU' ? 'selected': ''}} value="GURU">GURU</option>
                                            <option {{$penduduk->pekerjaan == 'MENGURUS RUMAH TANGGA' ? 'selected': ''}} value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                            <option {{$penduduk->pekerjaan == 'BELUM/TIDAK BEKERJA' ? 'selected': ''}} value="BELUM/TIDAK BEKERJA">BELUM/TIDAK BEKERJA</option>
                                            <option {{$penduduk->pekerjaan == 'LAINNYA' ? 'selected': ''}} value="LAINNYA">LAINNYA</option>
                                            @if(in_array($penduduk->pekerjaan, $arrPekerjaan) == false)
                                                <option selected value="{{ $penduduk->pekerjaan }}">{{ $penduduk->pekerjaan }}</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_ayah">NAMA AYAH</label>
                                    <input type="text" class="form-control" value="{{ $penduduk->nama_ayah }}" placeholder="Nama Ayah" id="nama_ayah" name="nama_ayah">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_ibu">NAMA IBU</label>
                                    <input type="text" class="form-control" value="{{ $penduduk->nama_ibu }}" placeholder="Nama Ibu" id="nama_ibu" name="nama_ibu">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nik_ayah">NIK AYAH</label>
                                    <input type="text" class="form-control" value="{{ $penduduk->nik_ayah }}" placeholder="NIK Ayah" id="nik_ayah" name="nik_ayah">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nik_ibu">NIK IBU</label>
                                    <input type="text" class="form-control" value="{{ $penduduk->nik_ibu }}" placeholder="NIK Ibu" id="nik_ibu" name="nik_ibu">
                                </div>
                            </div>
                        </div>

                        <hr/>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tgl_nikah">TANGGAL NIKAH</label>
                                    <input type="date" class="form-control" value="{{ $penduduk->tgl_nikah }}" id="tgl_nikah" name="tgl_nikah">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="no_buku_nikah">NOMOR BUKU NIKAH</label>
                                    <input type="text" class="form-control" value="{{ $penduduk->no_buku_nikah }}" placeholder="Nomor Buku Nikah" id="no_buku_nikah" name="no_buku_nikah">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="kua">KUA</label>
                                    <input type="text" class="form-control" value="{{ $penduduk->kua }}" placeholder="KUA" id="kua" name="kua">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="akte_lahir">AKTE KELAHIRAN /SURAT KENAL LAHIR</label>
                                    <input type="text" class="form-control" value="{{ $penduduk->akte_lahir }}" placeholder="Akte Kelahiran / Surat Kenal Lahir" id="akte_lahir" name="akte_lahir">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="no_bpjs">NOMOR PBI JK / BPJS</label>
                                    <input type="text" class="form-control" value="{{ $penduduk->no_bpjs }}" placeholder="Nomor PBI JK / BPJS" id="no_bpjs" name="no_bpjs">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="telepon">TELEPON</label>
                                    <input type="tel" class="form-control" value="{{ $penduduk->telepon }}" placeholder="Telepon" id="telepon" name="telepon">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tgl_kematian">TANGGAL KEMATIAN</label>
                                    <input type="date" class="form-control" value="{{ $penduduk->tgl_kematian }}" id="tgl_kematian" name="tgl_kematian">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pukul_kematian">PUKUL KEMATIAN</label>
                                    <input type="time" class="form-control" value="{{ $penduduk->pukul_kematian }}" id="pukul_kematian" name="pukul_kematian">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ket_kematian">KETERANGAN KEMATIAN</label>
                                    <input type="text" class="form-control" value="{{ $penduduk->ket_kematian }}" placeholder="Keterangan Kematian" id="ket_kematian" name="ket_kematian">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jabatan">JABATAN</label>
                                    <input type="text" class="form-control" value="{{ $penduduk->jabatan }}" placeholder="Jabatan" id="jabatan" name="jabatan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_ijazah">NOMOR IJAZAH / STB</label>
                                    <input type="text" class="form-control" value="{{ $penduduk->no_ijazah }}" placeholder="Nomor Ijazah / STB" id="no_ijazah" name="no_ijazah">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tgl_cerai">TANGGAL PERCERAIAN</label>
                                    <input type="date" class="form-control" value="{{ $penduduk->tgl_cerai }}" id="tgl_cerai" name="tgl_cerai">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_akta_cerai">NOMOR AKTA CERAI</label>
                                    <input type="text" class="form-control" value="{{ $penduduk->no_akta_cerai }}" placeholder="Nomor Akta Cerai" id="no_akta_cerai" name="no_akta_cerai">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    @php
                                        $arrGolDarah = [
                                            'A+', 'A', 'A-',
                                            'B+', 'B', 'B-',
                                            'AB+', 'AB', 'AB-',
                                            'O+', 'O', 'O-',
                                        ];
                                    @endphp
                                    <label for="gol_darah">GOLONGAN DARAH</label>
                                    <select class="selectpicker form-control" id="gol_darah" name="gol_darah">
                                        <option selected value="">-- GOLONGAN DARAH --</option>
                                        <option {{$penduduk->gol_darah == 'A+' ? 'selected': ''}} value="A+">A+</option>
                                        <option {{$penduduk->gol_darah == 'A' ? 'selected': ''}} value="A">A</option>
                                        <option {{$penduduk->gol_darah == 'A-' ? 'selected': ''}} value="A-">A-</option>
                                        <option {{$penduduk->gol_darah == 'B+' ? 'selected': ''}} value="B+">B+</option>
                                        <option {{$penduduk->gol_darah == 'B' ? 'selected': ''}} value="B">B</option>
                                        <option {{$penduduk->gol_darah == 'B-' ? 'selected': ''}} value="B-">B-</option>
                                        <option {{$penduduk->gol_darah == 'AB+' ? 'selected': ''}} value="AB+">AB+</option>
                                        <option {{$penduduk->gol_darah == 'AB' ? 'selected': ''}} value="AB">AB</option>
                                        <option {{$penduduk->gol_darah == 'AB-' ? 'selected': ''}} value="AB-">AB-</option>
                                        <option {{$penduduk->gol_darah == 'O+' ? 'selected': ''}} value="O+">O+</option>
                                        <option {{$penduduk->gol_darah == 'O' ? 'selected': ''}} value="O">O</option>
                                        <option {{$penduduk->gol_darah == 'O-' ? 'selected': ''}} value="O-">O-</option>
                                        @if(in_array($penduduk->gol_darah, $arrGolDarah) == false)
                                            <option selected value="{{ $penduduk->gol_darah }}">{{ $penduduk->gol_darah }}</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    @php
                                        $arrPenyandangCacat = [
                                            'CACAT FISIK', 'CACAT NETRA/BUTA', 'CACAT RUNGU/WICARA',
                                            'CACAT MENTAL/JIWA', 'CACAT FISIK DAN MENTAL', 'CACAT LAINNYA',
                                        ];
                                    @endphp
                                    <label for="penyandang_cacat">PENYANDANG CACAT</label>
                                    <select class="selectpicker form-control" id="penyandang_cacat" name="penyandang_cacat">
                                        <option selected value="">-- PENYANDANG CACAT --</option>
                                        <option {{$penduduk->penyandang_cacat == 'CACAT FISIK' ? 'selected': ''}} value="CACAT FISIK">CACAT FISIK</option>
                                        <option {{$penduduk->penyandang_cacat == 'CACAT NETRA/BUTA' ? 'selected': ''}} value="CACAT NETRA/BUTA">CACAT NETRA/BUTA</option>
                                        <option {{$penduduk->penyandang_cacat == 'CACAT RUNGU/WICARA' ? 'selected': ''}} value="CACAT RUNGU/WICARA">CACAT RUNGU/WICARA</option>
                                        <option {{$penduduk->penyandang_cacat == 'CACAT MENTAL/JIWA' ? 'selected': ''}} value="CACAT MENTAL/JIWA">CACAT MENTAL/JIWA</option>
                                        <option {{$penduduk->penyandang_cacat == 'CACAT FISIK DAN MENTAL' ? 'selected': ''}} value="CACAT FISIK DAN MENTAL">CACAT FISIK DAN MENTAL</option>
                                        <option {{$penduduk->penyandang_cacat == 'CACAT LAINNYA' ? 'selected': ''}} value="CACAT LAINNYA">CACAT LAINNYA</option>
                                        @if(in_array($penduduk->penyandang_cacat, $arrPenyandangCacat) == false)
                                            <option selected value="{{ $penduduk->penyandang_cacat }}">{{ $penduduk->penyandang_cacat }}</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                </div>
                            </div>
                            <div class="col-md-4 d-flex justify-content-end">
                                {{-- <input id="delete" type="button" onclick="window.location='{{ route('penduduk.delete', ['id_penduduk' => $penduduk->id])}}'" value="Hapus" class="btn btn-danger btn-lg fs-3 px-5 me-5" style="color: white;" formmethod="post">--}}
                                <input id="hapus" type="button" value="Hapus" class="btn btn-danger btn-lg fs-3 px-5 me-5 delete-confirm" style="color: white;" formmethod="post"
                                       onclick="
                                            event.preventDefault();
                                            swal({
                                                title: 'Apakah anda yakin untuk menghapus data {{$penduduk->nama}}?',
                                                text: 'Data tidak dapat dikembalikan apabila sudah terhapus.',
                                                icon: 'warning',
                                                buttons: true,
                                                dangerMode: true,
                                            }).then((willDelete) => {
                                                if (willDelete) {
                                                    window.location='{{ route('penduduk.delete', ['id_penduduk' => $penduduk->id])}}'
                                                }
                                            });
                                        "
                                >
                                <input id="simpan" type="submit" name="send" value="Simpan" class="btn btn-success btn-lg fs-3 px-5">

                            </div>
                        </div>

                </form>

                <footer class="mt-5">

                </footer>

            </section>
        </main>
    </div>

@endsection

<script>
    document.addEventListener('click', function(e) {
        if (e.target.id == "simpan" || e.target.id == "hapus") {
            window.onbeforeunload = null;
        } else {
            window.onbeforeunload = function() {
                event.preventDefault();
                event.returnValue = '';     // Chrome requires returnValue to be set
                return '?';
                {{--swal({--}}
                {{--    title: 'Apakah anda yakin untuk keluar?',--}}
                {{--    text: 'Perubahan yang telah dilakukan belum tersimpan.',--}}
                {{--    icon: 'warning',--}}
                {{--    buttons: true,--}}
                {{--    dangerMode: true,--}}
                {{--}).then((confirm) => {--}}
                {{--    if (confirm) {--}}
                {{--        window.location='{{ route('main.dashboard', ['page' => 'Dashboard'])}}'--}}
                {{--    }--}}
                {{--});--}}
                // return "Leaving this page will reset the wizard";
            };
        }
    }, false);
</script>
