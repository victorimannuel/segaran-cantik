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
    <link rel="stylesheet" href={{ asset('assets/styles/dashboard.css') }}>
    <link rel="stylesheet" href={{ asset('assets/styles/table-penduduk.css') }}>

    {{--  js yang digunakan--}}
    <script src="{{ asset('assets/scripts/sidebar.js') }}" async defer></script>

    <title>Segaran App | Main {{-- {{ $page }}  --}}</title>
</head>
<body>
@yield('main-body')
</body>
</html>
