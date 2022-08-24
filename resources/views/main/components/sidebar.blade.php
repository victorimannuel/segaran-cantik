<aside id="sidebar" class="d-flex flex-column position-fixed start-0 top-0">
    @csrf
    <header class="d-flex position-relative justify-content-center py-0 my-5">
        <div class="container-fluid d-flex flex-row">
            <img src={{ asset("assets/img/icons/segaran-icon.png")  }} alt="" width="50" height="50" class="hiddenWhenClosed">
            <span class="mx-3 hiddenWhenClosed">
            <h1>Segaran </h1>
            <h4>Admin</h4>
            </span>
        </div>
        <img src={{ asset("assets/img/icons/menu-toggle.png") }} alt="" id="menu-toggle"  class="menu-toggle" width="40" height="40" role="button">

    </header>

    <nav class="navbar navbar-dark p-0">
        <ul class="navbar-nav w-100 ">
            <a href="/dashboard" class="text-decoration-none my-2">
                @if ($page === 'Dashboard')
                    <li class="nav-item fs-3 d-flex align-items-center position-relative" selected role="button">
                @else
                    <li class="nav-item fs-3 d-flex align-items-center position-relative" role="button">
                        @endif

                        <div id="selectedMark" class="position-absolute h-100"></div>
                        <div class="nav-link ps-5 pe-auto active d-flex align-items-center" aria-current="page" >
                            <img src="{{ asset("assets/img/icons/dashboard.png") }}" alt="" class="me-4" width="25" height="25">
                            <p
                                class="hiddenWhenClosed m-0"
                            >Dashboard</p>
                        </div>
                    </li>
            </a>

            <a href="/statistik" class="text-decoration-none my-2">
                @if ($page === 'Statistik')
                    <li class="nav-item fs-3 d-flex align-items-center position-relative" selected role="button">
                @else
                    <li class="nav-item fs-3 d-flex align-items-center position-relative" role="button">
                        @endif

                        <div id="selectedMark" class="position-absolute h-100"></div>
                        <div class="nav-link ps-5 pe-auto active d-flex align-items-center" aria-current="page" >
                            <img src="{{ asset("assets/img/icons/stats.png") }}" alt="" class="me-4" width="25" height="25">
                            <p
                                class="hiddenWhenClosed m-0"
                            >Statistik</p>
                        </div>
                    </li>
            </a>

            <a href="/export-import" class="text-decoration-none my-2">
                @if ($page === 'Export / Import Data')
                    <li class="nav-item fs-3 d-flex align-items-center position-relative" selected role="button">
                @else
                    <li class="nav-item fs-3 d-flex align-items-center position-relative" role="button">
                        @endif

                        <div id="selectedMark" class="position-absolute h-100"></div>
                        <div class="nav-link ps-5 pe-auto active d-flex align-items-center" aria-current="page" >
                            <img src="{{ asset("assets/img/icons/database-window.png") }}" alt="" class="me-4" width="25" height="25">
                            <p
                                class="hiddenWhenClosed m-0"
                            >Export / Import</p>
                        </div>
                    </li>
            </a>

            <div class="divider my-2 mx-auto" style=""></div>

            <a href="/kegiatan" class="text-decoration-none my-2">
                @if ($page === 'Kegiatan')
                    <li class="nav-item fs-3 d-flex align-items-center position-relative" selected role="button">
                @else
                    <li class="nav-item fs-3 d-flex align-items-center position-relative" role="button">
                        @endif

                        <div id="selectedMark" class="position-absolute h-100"></div>
                        <div class="nav-link ps-5 pe-auto active d-flex align-items-center" aria-current="page">
                            <img src="{{ asset("assets/img/icons/calendar-filled.png") }}" alt="" class="me-4" width="25" height="25">
{{--                            <i class="fa fa-calendar me-4" width="25" height="25"></i>--}}
                            <p class="hiddenWhenClosed m-0" >Kegiatan</p>
                        </div>
                    </li>
            </a>

            <a href="/umkm" class="text-decoration-none my-2">
                @if ($page === 'UMKM')
                    <li class="nav-item fs-3 d-flex align-items-center position-relative" selected role="button">
                @else
                    <li class="nav-item fs-3 d-flex align-items-center position-relative" role="button">
                        @endif

                        <div id="selectedMark" class="position-absolute h-100"></div>
                        <div class="nav-link ps-5 pe-auto active d-flex align-items-center" aria-current="page" >
                            <img src="{{ asset("assets/img/icons/store.png") }}" alt="" class="me-4" width="25" height="25">
                            <p class="hiddenWhenClosed m-0" >UMKM</p>
                        </div>
                    </li>
            </a>

        </ul>

    </nav>
    <footer class="mt-auto mx-auto">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <input type="image" src="{{ asset("assets/img/icons/log-out.png") }}" class="hiddenWhenOpen" width="30"
                onclick="
                    window.event.preventDefault();
                    swal({
                        title: 'Apakah anda yakin untuk keluar?',
                        text: '',
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                    })
                        .then((willLogout) => {
                            if (willLogout) {
                                window.location='{{ route('logout')}}'
                            }
                        });
                "
            />
            <button id="logout-button" class="btn btn-secondary btn-lg fs-2 fw-bold hiddenWhenClosed border border-0"
                    onclick="
                    window.event.preventDefault();
                    swal({
                        title: 'Apakah anda yakin untuk keluar?',
                        text: '',
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                    })
                        .then((willLogout) => {
                            if (willLogout) {
                                window.location='{{ route('logout')}}'
                            }
                        });
                    "
            >Keluar</button>
        </form>
    </footer>

</aside>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

