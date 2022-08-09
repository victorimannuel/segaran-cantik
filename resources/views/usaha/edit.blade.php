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

                <form class="form-penduduk pb-5" method="post" action="{{ route('usaha.update', ['id_usaha' => $usaha->id]) }}" enctype="multipart/form-data">

                    <!-- CROSS Site Request Forgery Protection -->
                    @csrf

                    <span class="back-button d-flex flex-row" onclick="window.location='{{ route('main.usaha') }}'"
                          style="cursor: pointer;">
                        <a>
                            <img src="{{ asset("/assets/img/icons/back.png") }}" class="" width=30 alt="">
                        </a>
                        <p class="my-0 px-3 fs-2">Kembali</p>
                    </span>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="no_kk">NAMA USAHA</label>
                                <input type="text" class="form-control" value="{{ $usaha->nama_usaha }}" placeholder="Nama Usaha" name="nama_usaha">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="no_kk">Kontak</label>
                                <input type="text" class="form-control" value="{{ $usaha->kontak }}" placeholder="Kontak" name="kontak">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="jam_buka">Jam Operasional Buka</label>
                                <input type="time" class="form-control" value="{{ $usaha->jam_buka }}" name="jam_buka">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="jam_tutup">Jam Operasional Tutup</label>
                                <input type="time" class="form-control" value="{{ $usaha->jam_tutup }}" name="jam_tutup">
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
                                        <option {{$usaha->rw == $i ? 'selected': ''}} value="{{ $i }}">{{ $i }}</option>
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
                                        <option {{$usaha->rw == $i ? 'selected': ''}} value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="dusun">DUSUN</label>
                                <select class="selectpicker form-control" id="dusun" name="dusun">
                                    <option selected value="">-- DUSUN --</option>
                                    <option {{$usaha->dusun == 'KRAJAN' ? 'selected': ''}} value="KRAJAN">KRAJAN</option>
                                    <option {{$usaha->dusun == 'PUTAT' ? 'selected': ''}} value="PUTAT">PUTAT</option>
                                    <option {{$usaha->dusun == 'SUMBERBANTENG' ? 'selected': ''}} value="SUMBERBANTENG">SUMBERBANTENG</option>
                                    <option {{$usaha->dusun == 'SUMBERJABON' ? 'selected': ''}} value="SUMBERJABON">SUMBERJABON</option>
                                    <option {{$usaha->dusun == 'SUMBERKOTES KULON' ? 'selected': ''}} value="SUMBERKOTES KULON">SUMBERKOTES KULON</option>
                                    <option {{$usaha->dusun == 'SUMBERKOTES WETAN' ? 'selected': ''}} value="SUMBERKOTES WETAN">SUMBERKOTES WETAN</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_kk">DESKRIPSI</label>
                                <textarea class="form-control" placeholder="Deskripsi" name="deskripsi">{{ $usaha->deskripsi }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <img width="150px" src="{{ url('/data_file/usaha/'.$usaha->file) }}">
                                <label for="file">Gambar</label>
                                <input type="file" name="file"/>
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
                            <input type="button" onclick="window.location='{{ route('usaha.delete', ['id_usaha' => $usaha->id])}}'" value="Hapus" class="btn btn-danger btn-lg fs-3 px-5 me-5" style="color: white;" formmethod="post">
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
