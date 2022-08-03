<aside class="d-flex flex-column position-fixed start-0 top-0">
    @csrf
    <header class="d-flex justify-content-center ms-2 me-auto mb-5">
        <img src={{ asset("assets/img/icons/segaran-icon.png")  }} alt="" width="50" height="50" class="hiddenWhenClosed">
        <span class="mx-3 hiddenWhenClosed">
        <h1>Segaran </h1>
        <h4>Admin</h4>
    </span>
        <img src={{ asset("assets/img/icons/menu-toggle.png") }} alt="" id="menu-toggle"     width="40" height="40" role="button">
    </header>

    <nav class="navbar navbar-dark p-0">
        <ul class="navbar-nav w-100 ">
            <a href="/dashboard" class="text-decoration-none mb-3">
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

            <a href="/statistik" class="text-decoration-none mb-3">
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

            <a href="/export-import" class="text-decoration-none mb-3">
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

        </ul>

    </nav>
    <footer class="mt-auto mx-auto">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <input type="image" src="{{ asset("assets/img/icons/log-out.png") }}" class="hiddenWhenOpen" width="30">
            <button class="btn btn-secondary btn-lg fs-2 fw-bold hiddenWhenClosed  border border-0" >Keluar</button>
        </form>
    </footer>

</aside>