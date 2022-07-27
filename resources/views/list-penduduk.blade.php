<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/list-penduduk.css') }}">--}}
</head>
<body>
<div class="table-responsive custom-font">
    <table class="table table-bordered table-hover border-bottom">
        <thead class="thead">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nomor KK</th>
            <th scope="col">Nama</th>
            <th scope="col">NIK</th>
            <th scope="col">RT</th>
            <th scope="col">RW</th>
            <th scope="col">Dusun</th>
            <th scope="col">Validasi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($penduduk as $penduduk)
            <tr onclick="{{ route('dashboard') }}">
{{--            <tr class="table-row" onclick="document.location = '/form-penduduk';">--}}
            <tr class="table-row" data-href="/">
                <td>{{ $penduduk->id }}</td>
                <td>{{ $penduduk->no_kk }}</td>
                <td>{{ $penduduk->nama}}</td>
                <td>{{ $penduduk->nik }}</td>
                <td>{{ $penduduk->rt}}</td>
                <td>{{ $penduduk->rw}}</td>
                <td>{{ $penduduk->dusun}}</td>
                <td>{{ $penduduk->validasi}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
