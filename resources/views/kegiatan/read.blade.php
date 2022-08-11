@extends('layouts.main')

@section('main-body')

    <div id="sidebarState" state="aside-closed">

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

                <form class="form-penduduk form-penduduk-readonly pb-5" method="post">
                    <!-- CROSS Site Request Forgery Protection -->
                    @csrf

                    <span class="back-button d-flex flex-row" onclick="window.location='{{ route('main.kegiatan') }}'"
                          style="cursor: pointer;">
                        <a>
                            <img src="{{ asset("/assets/img/icons/back.png") }}" class="" width=30 alt="">
                        </a>
                        <p class="my-0 px-3 fs-2">Kembali</p>
                    </span>

                    <div class="row gx-5">
                        <div class="col-md">
                            <div class="row">
                                <div class="form-group">
                                    <label for="no_kk">NAMA KEGIATAN</label>
                                    <input disabled type="text" class="form-control" value="{{ $kegiatan->nama_kegiatan }}" placeholder="Nama Kegiatan" name="nama_kegiatan">
                                    @if ($errors->has('nama_kegiatan'))
                                        <div class="error">
                                            {{ $errors->first('nama_kegiatan') }}
                                        </div>
                                    @endif
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="no_kk">TANGGAL BERLANGSUNG</label>
                                        <input disabled type="date" class="form-control" value="{{ $kegiatan->tgl }}" placeholder="Tanggal" name="tgl">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="no_kk">LOKASI</label>
                                        <input disabled type="text" class="form-control" placeholder="Lokasi" value="{{ $kegiatan->lokasi }}" name="lokasi">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label for="no_kk">DESKRIPSI</label>
                                    <textarea disabled class="form-control deskripsi-kegiatan" placeholder="Deskripsi" name="deskripsi">{{ $kegiatan->deskripsi }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group d-flex flex-column">
                                <label for="file">Gambar</label>
                                @if($kegiatan->file)
                                    <img width=510 height=360 src="{{ url('/data_file/kegiatan/'.$kegiatan->file) }}">
                                @else
                                    <span class="border-1">Belum ada foto</span>

                                    <img id="image" width=540 height=340 class="shadow rounded" style="" src="">
                                @endif
                            </div>

                        </div>
                    </div>

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
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4 d-flex flex-row-reverse">
                                    <button type="button" class="btn btn-primary btn-lg fs-3 px-5"
                                            onclick="window.location='{{ route('kegiatan.edit', ['id_kegiatan' => $kegiatan->id])}}'"
                                    >
                                        Ubah
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </section>

            <footer class="mt-5">

            </footer>
        </main>
    </div>

@endsection

<script>
    // var selectable = [
    //     'hub_keluarga',
    //     'status_kawin',
    //     'jenis_kelamin',
    //     'agama',
    //     'rt',
    //     'rw',
    //     'dusun',
    //     'status_pendidikan',
    //     'pendidikan',
    //     'gol_darah',
    //     'penyandang_cacat',
    // ];
    // for (let i = 0; i < selectable.length; i++) {
    //     document.getElementById(selectable[i]).prop("disabled", isdisabled);
    //     document.getElementById(selectable[i]).toggleClass("my-read-only-class", isdisabled);
    //     document.getElementById(selectable[i]).find("option").prop("hidden", isdisabled);
    // }
</script>
