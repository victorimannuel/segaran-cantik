<!DOCTYPE html>
<html lang="en">
<head>
    {{-- @vite('resource/js/app.js') --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @include('layouts.import')
    
    <link rel="stylesheet" href={{ asset('assets/styles/main.css') }}>
    <link rel="stylesheet" href={{ asset('assets/styles/sidebar.css') }}>


    <title>Segaran App | Main {{-- {{ $page }}  --}}</title>
</head>
<body>
    @yield('main-body')
</body>
</html>