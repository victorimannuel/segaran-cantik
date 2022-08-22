<header class="d-flex justify-content-between align-items-center m-5">

    <span id="menu-toggle-mobile" class="d-flex flex-row align-items-center justify-content-center">
        <img src={{ asset("assets/img/icons/menu-toggle-dark.png") }} alt=""  class="menu-toggle" id="menu-toggle-icon" width="40" height="40" role="button">

        <h1 id="currentPage" class="h1"><b role="button">{{ $page }}</b></h1>
    </span>
    <span class="d-flex flex-row align-items-center">
            <a href="/dashboard/log">
                <img id="activityLogg" src={{ asset("assets/img/icons/activity-log.png" )  }}
                alt="activity" width="30" height="30" role="button"
                type="button" class="">
            </a>
            
            
            <img id="notificationButton" src={{ asset("assets/img/icons/notif-dot.png" )  }} alt="notification" width="30" height="30" role="button"
            type="button" class="" data-bs-toggle="modal" data-bs-target="#notificationModal"
            data-backdrop="false"
            hidden
            >
        <div class="px-4">
            <div id="line">

            </div>
        </div>
        <div class="d-flex flex-row align-items-center fs-3">
            <p id="name" value="Kepala Desa" class=" m-0">Masuk sebagai, <b> {{ $user_name }} </b></p>

            <div>
                <img src= {{ asset("assets/img/default-user.png" ) }} alt="profile" width="40" height="40" hidden>
            </div>
        </div>

    </span>

    @include('main.components.notif')
    </header>
