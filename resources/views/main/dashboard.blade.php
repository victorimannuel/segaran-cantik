@extends('layouts.main')

@section('main-body')

    <div id= "sidebarState" state="aside-open">

        @include('main.components.sidebar')

        <main class="d-flex flex-column position-absolute end-0 top-0 vw-80">

            @include('main.components.header')

            <section class="mx-5 align-self-center d-flex justify-content-center">

                @include('main.components.cards')


                @include('main.components.table-penduduk')

{{--<<<<<<< HEAD--}}
                <div class="container mw-100 mx-0 mt-5 card p-0">
                    <div class="row">
                        <div class="col-md-4" style="padding-top:1rem; padding-left:2rem;">
                            <form action="/tambah-penduduk">
                                <button class="btn btn-primary" style="font-size: 13pt; width:15rem; height:3.5rem;">Tambah Data</button>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <h1 class="text-center py-3">
                                <b>Data Warga Desa Segaran</b>
                            </h1>
                        </div>
                        <div class="col-md-4" style="padding-top: 1rem;">
                            <select id="pagination" style="height: 3rem;">
                                <option value="10" {{$items == 10 ? 'selected':''}}>10</option>
                                <option value="25" {{$items == 25 ? 'selected':''}}>25</option>
                                <option value="50" {{$items == 50 ? 'selected':''}}>50</option>
                                <option value="75" {{$items == 75 ? 'selected':''}}>75</option>
                                <option value="100" {{$items == 100 ? 'selected':''}} >100</option>
                                <option value="200" {{$items == 200 ? 'selected':''}}>200</option>
                            </select>
                        </div>
                    </div>
                    <div class="fs-4">
                        <form action="/search" method="POST" role="search">
                            <div class="row" style="width: 100rem; justify-items: center;">
                                @csrf
                                <div class="col-md-3">
                                    <select id="dusun" name="dusun">
                                        <option selected value="DUSUN">DUSUN</option>
                                        <option value="KRAJAN">KRAJAN</option>
                                        <option value="SUMBERKOTES WETAN">SUMBERKOTES WETAN</option>
                                        <option value="PUTAT">PUTAT</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select id="rw" name="rw">
                                        <option selected value="RW">RW</option>
                                        @for ($i = 1; $i <= 9; $i++)
                                            <option {{ $rw == $i ? 'selected':'' }} value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select id="rt" name="rt">
                                        <option selected value="RT">RT</option>
                                        @for ($i = 1; $i <= 30; $i++)
                                            <option {{ $rt == $i ? 'selected':'' }} value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group">
                                        <input type="text" value="{{ $q }}" class="form-control" name="q" placeholder="Cari Data">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <footer class="mt-5">

            </footer>
        </main>
    </div>

@endsection
