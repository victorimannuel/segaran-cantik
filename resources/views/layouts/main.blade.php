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

    {{--  js yang digunakan--}}
    <script src="{{ asset('assets/scripts/sidebar.js') }}" async defer></script>
    
    <link rel="icon" type="image/x-icon" href={{ asset('assets/img/icons/segaran-icon.png') }}>

    <title>Segaran App | Main {{-- {{ $page }}  --}}</title>
</head>
<body>
@yield('main-body')
<script>
    document.getElementById('rt').onchange = function() {
            this.form.submit();
    };
    document.getElementById('rw').onchange = function() {
            this.form.submit();
    };
    document.getElementById('dusun').onchange = function() {
            this.form.submit();
    };
    // document.getElementById('q').onchange = function() {
    //     this.form.submit();
    // };
</script>
</body>
</html>
