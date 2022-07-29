@extends('layouts.main')

@section('main-body')

    <div id= "sidebarState" state="aside-open">

        @include('main.components.sidebar')

        <main class="d-flex flex-column position-absolute end-0 top-0 vw-80">
            <header class="d-flex justify-content-between align-items-center m-5">
            <span>
                <h1 class="h1"><b>Overview</b></h1>
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
                                6
                            </p>
                        </div>
                    </div>
                    <div class="card mx-5">
                        <div class="card-body d-flex justify-content-center flex-column ">
                            <h5 class="card-title">
                                Jumlah RW
                            </h5>
                            <p class="card-text">
                                9
                            </p>
                        </div>
                    </div>
                    <div class="card mx-5">
                        <div class="card-body d-flex justify-content-center flex-column">
                            <h5 class="card-title">
                                Jumlah RT
                            </h5>
                            <p class="card-text">
                                30
                            </p>
                        </div>

                    </div>
                    <div class="card ms-5">
                        <div class="card-body d-flex justify-content-center flex-column">
                            <h5 class="card-title">
                                Jumlah Penduduk
                            </h5>
                            <p class="card-text">
                                none
                            </p>
                        </div>

                    </div>
                </div>

                <div class="container mw-100 mx-0 mt-5 card">
{{--                    <table class="table">--}}

                </div>

            </section>


        </main>
    </div>

@endsection
