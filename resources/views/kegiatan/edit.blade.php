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
                <form class="form-penduduk pb-5" method="post" action="{{ route('kegiatan.update', ['id_kegiatan' => $kegiatan->id]) }}" enctype="multipart/form-data">
{{--                <form class="form-penduduk pb-5" method="post" action="{{ route('kegiatan.update', ['id_kegiatan' => $kegiatan->id]) }}">--}}
                    <!-- CROSS Site Request Forgery Protection -->
                    @csrf
                    <div class="form-group">
                        <span class="back-button d-flex flex-row" onclick="window.location='{{ route('kegiatan.read', ['id_kegiatan' => $kegiatan->id])}}'" style="cursor: pointer;">
                            <a>
                            <img src="{{ asset("/assets/img/icons/back.png") }}" class="" width=30 alt="">
                            </a>
                            <p class="my-0 px-3 fs-2">Kembali</p>
                        </span>
                    </div>

                    <div class="row gx-5">
                        <div class="col-md">
                            <div class="row">
                                <div class="form-group">
                                    <label for="no_kk">NAMA KEGIATAN</label>
                                    <input type="text" class="form-control" value="{{ $kegiatan->nama_kegiatan }}" placeholder="Nama Kegiatan" name="nama_kegiatan">
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
                                        <label for="no_kk">Tanggal Berlangsung</label>
                                        <input type="date" class="form-control" value="{{ $kegiatan->tgl }}" placeholder="Tanggal" name="tgl">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="no_kk">Lokasi</label>
                                        <input type="text" class="form-control" placeholder="Lokasi" value="{{ $kegiatan->lokasi }}" name="lokasi">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label for="no_kk">DESKRIPSI</label>
                                    <textarea class="form-control deskripsi-kegiatan" placeholder="Deskripsi" name="deskripsi">{{ $kegiatan->deskripsi }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group d-flex flex-column">
                                <label for="file">Gambar</label>
                                <input type="file" name="file"/>
                                @if($kegiatan->file)
                                    <img width="150px" src="{{ url('/data_file/kegiatan/'.$kegiatan->file) }}">
                                @else
                                    <span class="border-1">Belum ada foto</span>

                                    <img id="image" width=500 height=310 class="shadow rounded" style="" src="">
                                @endif
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
                            <input type="button" onclick="window.location='{{ route('kegiatan.delete', ['id_kegiatan' => $kegiatan->id])}}'" value="Hapus" class="btn btn-danger btn-lg fs-3 px-5 me-5" style="color: white;" formmethod="post">
                            <input type="submit" name="send" value="Simpan" class="btn btn-success btn-lg fs-3 px-5">
                        </div>
                    </div>

                </form>

            </section>

            <footer class="mt-5">

            </footer>

        </main>
    </div>

@endsection

