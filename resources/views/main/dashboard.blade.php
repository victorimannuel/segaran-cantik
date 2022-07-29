@extends('layouts.main')

@section('main-body')

    <div id= "sidebarState" state="aside-open">

        @include('main.components.sidebar')

        <main class="d-flex flex-column position-absolute end-0 top-0 vw-80">
            @include('main.components.header')

            <section class="mx-5 align-self-center d-flex justify-content-center">

                @include('main.components.cards')

                <div class="container mw-100 mx-0 mt-5 card p-0">
                {{-- <table class="table"> --}}
                    <h1 class="text-center py-3">
                        <b>Data Warga Desa Segaran</b>
                    </h1>
                    <div class="fs-4">

                        <form action="/search" method="POST" role="search">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control" name="q" placeholder="Cari Data">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </form>
                        @include('main.components.table-penduduk')
                    </div>
                {{-- <thead></thead> --}}
                {{--<tr></tr>--}}
                {{--</table>--}}

                </div>

            </section>


        </main>
    </div>

@endsection
