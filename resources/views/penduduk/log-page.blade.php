@extends('layouts.main')

@section('main-body')

    <div id= "sidebarState" state="aside-closed">

        @include('main.components.sidebar')

        <main class="d-flex flex-column position-absolute end-0 top-0 vw-80">

            @include('main.components.header')

            <div style="padding: 3rem 10rem 0 10rem;">
                <table class="table">
                    <thead class="h4">
                        <tr>
                            <th>Variabel</th>
                            <th>Sebelum</th>
                            <th>Sesudah</th>
                            <th>Pengubah</th>
                            <th>Tanggal Diubah</th>
                        </tr>
                    </thead>
                    @foreach($arrLog as $log)
                        <tr>
                            @foreach($log as $l)
                                <td>
                                    @if($l != null)
                                    <span class="fs-3">{{ $l }}</span>
                                    @else
                                    <span class="fs-3">-</span>
                                    @endif
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </table>
            </div>

        </main>
    </div>

@endsection
