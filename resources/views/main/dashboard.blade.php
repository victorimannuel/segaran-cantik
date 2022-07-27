{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
@extends('layouts.main')

@section('main-body')
in the name of lordaeron
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('assets/styles/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/dashboard.css') }}">

    <script src={{  asset('assets/scripts/style.js') }} async></script>

    <title>Dashboard | Segaran App</title>
</head>
<body>
    <aside state="open">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
        <div id="title">
            <span id="logo">
                <img src={{ asset("assets/img/icons/segaran-icon.png")  }} alt="" width="50" height="50" navHide="">
                <span navHide="">
                    <h1>Segaran</h1>
                    <p>Dashboard</p>
                </span>

            </span>
            <img src={{ asset("assets/img/icons/menu-toggle.png") }} alt="" width="50" id="menu-toggle" class="button">
        </div>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>


            <button type=submit id="keluar" name="Keluar" class="button" navHide="" style="margin-left:-3.5rem">Keluar</button>

            <input type="image" style="width: 50px; height: 50px;" src="{{ asset('/assets/img/icons/log-out.png') }}" alt="log out" width="50" class="button" hidden id="logout"/>
        </form>
    </aside>

    <main>
        <header>
            <div id="title">
                Dashboard
            </div>
            <span id="top-right">
                <img src={{ asset("assets/img/icons/notif.png" )  }} alt="notification" width="30" height="30" class="button">
                <div id="divider">|</div>

                <div class="profile button">
                    <p id="name" value="Kepala Desa">Kepala Desa</p>


                    <div id="profile-circle">

                        <img src= {{ asset("assets/img/avatar-man.png" ) }} alt="profile" width="50" height="50">
                    </div>
                </div>

            </span>


        </header>

        <section>
            <div class="card-container">
                <div id="card-1"class="card">
                    <h2>Jumlah Dusun</h1>
                    <h1 value="60">60</h1>
                </div>
                <div id="card-2"class="card">
                    <h2>Jumlah RW</h1>
                    <h1>60</h1>
                </div>
                <div id="card-3"class="card">
                    <h2>Jumlah RT</h1>
                    <h1>60</h1>
                </div>
                <div id="card-4"class="card">
                    <h2>Jumlah Penduduk</h1>
                    <h1>60</h1>
                </div>
            </div>
            <div class="table">
                <head>Data Warga Desa  Segaran</head>
                <div class="sort"></div>
                <div class="data"></div>


            </div>

        </section>


    </main>

</body>
</html>
