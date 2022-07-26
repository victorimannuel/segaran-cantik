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

        <nav id="nav">
            <ul>
                <li id="dashboard" class="button" chosen="true">
                    <a href=".">
                    <span id="pointer" hidden></span>

                        <img src= {{ asset("assets/img/icons/home.png") }} alt="" width="30">
                    <span navHide>Dashboard</span>
                    </a>
                </li>
                <li id="statistik" class="button">
                    <a href="">
                        <span id="pointer" hidden></span>
                        <img src={{ asset("assets/img/icons/folder.png" ) }} alt="" width="30">
                        <span navHide>Statistik</span>
                    </a>
                </li>
            </ul>
        </nav>


        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type=submit id="keluar" name="Keluar" class="button" navHide="" style="margin-left:-3.5rem">Keluar</button>
        </form>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <input type="image" src="{{ asset('/assets/img/icons/log-out.png') }}" alt="log out" width="50" class="button" hidden id="logout"/>
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
