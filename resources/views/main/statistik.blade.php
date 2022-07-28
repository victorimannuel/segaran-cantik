@extends('layouts.main')

@section('main-body')

    <div id= "sidebarState" state="aside-open">

        <aside class="d-flex flex-column position-absolute start-0 top-0
    ">
            @csrf
            <header class="d-flex justify-content-center ms-2 me-auto mb-5">
                <img src={{ asset("assets/img/icons/segaran-icon.png")  }} alt="" width="50" height="50" class="hiddenWhenClosed">
                <span class="mx-3 hiddenWhenClosed">
                <h1>Segaran </h1>
                <h4>Dashboard</h4>
            </span>
                <img src={{ asset("assets/img/icons/menu-toggle.png") }} alt="" id="menu-toggle" width="40" height="40" role="button">
            </header>

            <nav class="navbar navbar-dark">
                <ul class="navbar-nav w-100">
                    <li class="nav-item fs-3 d-flex align-items-center position-relative mb-2" role="button">
                        <div id="selectedMark" class="position-absolute h-100"></div>
                        <a class="nav-link ps-5 pe-auto active d-flex align-items-center" aria-current="page" href="./dashboard">
                            <img src="{{ asset("assets/img/icons/home.png") }}" alt="" class="me-4" width="25" height="25">
                            <p
                                class="hiddenWhenClosed m-0"
                            >Overview</p>
                        </a>
                    </li>
                    <li class="nav-item fs-3 d-flex align-items-center position-relative mb-2" selected role="button">
                        <div id="selectedMark" class="position-absolute h-100"></div>
                        <a class="nav-link ps-5 pe-auto active d-flex align-items-center" aria-current="page" href="./statistik">
                            <img src="{{ asset("assets/img/icons/folder.png") }}" alt="" class="me-4" width="25" height="25">
                            <p
                                class="hiddenWhenClosed m-0"
                            >Statistik</p>
                        </a>
                    </li>
                </ul>

            </nav>
            <footer class="mt-auto mx-auto">
                <form method="POST" action="{{ route('logout') }}">
                    <input type="image" src="{{ asset("assets/img/icons/log-out.png") }}" class="hiddenWhenOpen" width="30">
                    <button class="btn btn-secondary btn-lg fs-2 fw-bold hiddenWhenClosed" >Keluar</button>
                </form>
            </footer>

        </aside>

        <main class="d-flex flex-column position-absolute end-0 top-0 vw-80">
            <header class="d-flex justify-content-between align-items-center m-5">
            <span>
                <h1 class="h1"><b>Statistik</b></h1>
            </span>
                <span class="d-flex flex-row align-items-center">
                <div href="#">
                    <img src={{ asset("assets/img/icons/notif.png" )  }} alt="notification" width="30" height="30" role="button">
                </div>
                <div class="ps-4">
                    <div id="line">

                    </div>
                </div>
                <div class="d-flex flex-row align-items-center fs-3 px-5" role="button">
                    <p id="name" value="Kepala Desa" class="px-3 m-0">Kepala Desa</p>


                    <div>
                        <img src= {{ asset("assets/img/avatar-man.png" ) }} alt="profile" width="50" height="50">
                    </div>
                </div>

            </span>


            </header>

            <section class="mx-5 align-self-center d-flex justify-content-center">
                <div class="container text-center mw-100 p-0 d-flex justify-content-between" style="">

                    <div class="card me-5">
                        <div class="card-body d-flex justify-content-center flex-column">
                            <h5 class="card-title">Jumlah Dusun

                            </h5>
                            <p class="card-text">
                                60
                            </p>
                        </div>
                    </div>
                    <div class="card mx-5">
                        <div class="card-body d-flex justify-content-center flex-column ">
                            <h5 class="card-title">
                                Jumlah RW
                            </h5>
                            <p class="card-text">
                                60
                            </p>
                        </div>
                    </div>
                    <div class="card mx-5">
                        <div class="card-body d-flex justify-content-center flex-column">
                            <h5 class="card-title">
                                Jumlah RT
                            </h5>
                            <p class="card-text">
                                60
                            </p>
                        </div>

                    </div>
                    <div class="card ms-5">
                        <div class="card-body d-flex justify-content-center flex-column">
                            <h5 class="card-title">
                                Jumlah Penduduk
                            </h5>
                            <p class="card-text">
                                60
                            </p>
                        </div>

                    </div>
                </div>

                <div class="container mw-100 mx-0 mt-5 card">
                    <table class="table">
                        <h1 class="text-center">Data Warga Desa  Segaran</h1>
                        <thead></thead>
                        <tr></tr>
                    </table>
                    <head></head>

                </div>

            </section>


        </main>
    </div>

@endsection
