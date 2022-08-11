<!DOCTYPE html>
<html lang="en">
<head>
    {{-- @vite('resource/js/app.js') --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('layouts.import')

    {{--  css yang digunakan --}}
    <link rel="stylesheet" href={{ asset('assets/styles/main.css') }}>
    <link rel="stylesheet" href={{ asset('assets/styles/sidebar.css') }}>
    <link rel="stylesheet" href={{ asset('assets/styles/table-penduduk.css') }}>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/form-penduduk.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/statistik.css') }}">

    {{--  js yang digunakan--}}
    <script src="{{ asset('assets/scripts/sidebar.js') }}" defer></script>
    <script src="{{ asset('assets/scripts/statistik.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js" defer></script>

    <link rel="icon" type="image/x-icon" href={{ asset('assets/img/icons/segaran-icon.png') }}>

    <title>Segaran Admin | {{ $page }} </title>
</head>
<body>

@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif
@yield('main-body')
@include('sweetalert::alert')

</body>
</html>
