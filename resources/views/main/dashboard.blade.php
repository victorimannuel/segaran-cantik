@extends('layouts.main')

@section('main-body')

<aside state="open" class="d-flex flex-column">
    @csrf
    <header class="d-flex justify-content-center ms-2 me-auto mb-5">
        <img src={{ asset("assets/img/icons/segaran-icon.png")  }} alt="" width="50" height="50">
        <span class="mx-3">
            <h1>Segaran </h1>
            <h4>Dashboard</h4>
        </span>
        <img src={{ asset("assets/img/icons/menu-toggle.png") }} alt="" width="40" height="40" role="button" >
    </header>
    
    <nav class="navbar navbar-dark">
        <ul class="navbar-nav w-100">
            <li class="nav-item fs-3 d-flex align-items-center position-relative mb-2" selected>
                <div id="selectedMark" class="position-absolute h-100"></div>
                <a class="nav-link ps-5 pe-auto active" aria-current="page" href="#">
                    <img src="{{ asset("assets/img/icons/home.png") }}" alt="" class="me-4" width="25" height="25">
                    Dashboard</a>
            </li>
            <li class="nav-item fs-3 ps-5 pe-auto d-flex">
                <div id="selectedMark" class="position-absolute h-100"></div>
                <a class="nav-link" aria-current="page" href="#">
                <img src="{{ asset("assets/img/icons/folder.png") }}" alt=""
                class="me-4" width="25" height="25">
                Statistik</a>
            </li>
        </ul>
        
    </nav>
    <footer class="mt-auto mx-auto">
        <form method="POST" action="{{ route('logout') }}">
            <input type="image" src="{{ asset("assets/img/icons/log-out.png") }}" class="d-none" width=50>
            <button class="btn btn-secondary btn-lg fs-2 fw-bold">Keluar</button>
        </form>
    </footer>

</aside>

<main class="d-flex flex-column position-absolute vw-80">
    <header class="d-flex justify-content-center m-5">
        <span>
            <h1>Dashboard</h1>
        </span>
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

@endsection