<!DOCTYPE html>
<html lang="en">
<head>
    {{-- @vite('resource/js/app.js') --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @include('layouts.import')
    
    <link rel="stylesheet" href={{ asset('assets/styles/landing.css') }}>

    <title>Segaran App | {{ $page }}</title>
</head>
<body>
    @yield('landing-body')
</body>
</html>