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
                <form class="form-penduduk pb-5" method="post" action="{{ route('kegiatan.store') }}" enctype="multipart/form-data">
                    <!-- CROSS Site Request Forgery Protection -->
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="no_kk">NAMA KEGIATAN</label>
                                <input type="text" class="form-control" placeholder="Nama Kegiatan" name="nama_kegiatan">
                                <!-- Error -->
                                @if ($errors->has('nama_kegiatan'))
                                    <div class="error">
                                        {{ $errors->first('nama_kegiatan') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="no_kk">Tanggal Berlangsung</label>
                                <input type="date" class="form-control" placeholder="Tanggal" name="tgl">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="no_kk">Lokasi</label>
                                <input type="text" class="form-control" placeholder="Lokasi" name="lokasi">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_kk">DESKRIPSI</label>
                                <textarea class="form-control" placeholder="Deskripsi" name="deskripsi"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="file">Gambar</label>
                                <input type="file" name="file"/>
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
                                    <div class="form-group">
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-end">
                                    <div class="form-group">
                                        <input type="submit" name="send" value="Simpan" class="btn btn-success btn-lg fs-3 px-5">
                                    </div>
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
