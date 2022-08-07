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
                <form class="form-penduduk pb-5" method="post" action="{{ route('usaha.store') }}">
                    <!-- CROSS Site Request Forgery Protection -->
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_kk">NAMA KEGIATAN</label>
                                <input type="text" class="form-control" placeholder="Nama Kegiatan" name="nama_usaha">
                                <!-- Error -->
                                @if ($errors->has('nama_usaha'))
                                    <div class="error">
                                        {{ $errors->first('nama_usaha') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_kk">Kontak</label>
                                <input type="text" class="form-control" placeholder="Kontak" name="kontak">
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
                                        <option value="{{ $i }}">{{ $i }}</option>
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
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="dusun">DUSUN</label>
                                <select class="selectpicker form-control" id="dusun" name="dusun">
                                    <option selected value="">-- DUSUN --</option>
                                    <option value="KRAJAN">KRAJAN</option>
                                    <option value="PUTAT">PUTAT</option>
                                    <option value="SUMBERBANTENG">SUMBERBANTENG</option>
                                    <option value="SUMBERJABON">SUMBERJABON</option>
                                    <option value="SUMBERKOTES WETAN">SUMBERKOTES WETAN</option>
                                    <option value="SUMBERKOTES KULON">SUMBERKOTES KULON</option>
                                </select>
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
