<div class="row" id="profile-row">
    <div class="col" id="profil1">
        <img src="{{asset('assets/profil-desa/img/profil/profile-img.png')}}" alt="">
    </div>
    <div class="col" id="profil">
        <p id="profile-title" class="h1 fs-1" style="margin-top:10% ">Malang</p>
        <p id="profile-subtitle">Desa Segaran </p>
        <p id="profile-description" style="margin-right: 10%;"> Desa Segaran adalah desa yang tidak begitu ramai, tetapi selalu memiliki banyak cerita unik. Sebagian besar penduduk Desa Segaran bercocok tanam sebagai sumber pendapatan. Produk yang dihasilkan tidak hanya tebu, tetapi juga batu kapur dari hasil tambang. Produk - produk tersebut banyak dikirim kepada pengolah batu kapur di daerah Druju, Sumberejo, dan di daerah Turen.</p>
        <span id="luas" style="width:10rem;text-align:center;border-bottom:2px solid black; "> <img src="{{asset('assets/profil-desa/img/profil/luas.png')}}" alt="" style="margin-bottom: 0.3em"> ±11 km²</span>
        {{-- Dinamis --}}

        <br id="breaker">
        <span id="penduduk" style="margin-left: 3%"><img src="{{asset('assets/profil-desa/img/profil/people-icon.png')}}"  alt="">{{"8.901 Penduduk"}}</span>

        <div >

            <div class="row" id="offset">
                <div class="col">
                    <a href="https://goo.gl/maps/BAuxNnzwVsfAezfMA">
                        <img id="peta-segaran" src="{{ asset('assets/profil-desa/img/profil/peta-segaran.png') }}" alt="" class="img-fluid" >
                    </a>

                    <div id="mobile-mode">
                        <div id="jarak" class="img-container">

                            <img id="profile-mobile-mode" src="{{ asset('assets/profil-desa/img/profil/location-icon.png') }}" alt="" 
                                style="margin-right: 1rem;"
                            >
                            {{"Jarak dari lokasi anda"}}
                        </div>

                        <div id="dusun" class="img-container">

                            <img  id="profile-mobile-mode" src="{{ asset('assets/profil-desa/img/profil/houses-icon.png') }}" alt="" 
                                style="margin-right: 1rem;"
                            >
                            6 Dusun</div>
                        <div id="rt-rw" class="img-container">

                            <img  id="profile-mobile-mode" src="{{ asset('assets/profil-desa/img/profil/house-icon.png') }}" alt="" 
                                style="margin-right: 1rem;"
                            >
                            30 RT 9 RW</div>
                    </div>
                </div>
                <div class="col" id="desktop-mode">
                
                    <div id="desktop-mode">
                        <div id="jarak" class="img-container">

                            <img src="{{ asset('assets/profil-desa/img/profil/location-icon.png') }}" alt="" width="50"
                                style="margin-right: 1rem;"
                            >
                            {{"Jarak dari lokasi anda"}}
                        </div>

                        <div id="dusun" class="img-container">

                            <img src="{{ asset('assets/profil-desa/img/profil/houses-icon.png') }}" alt="" width="50"
                                style="margin-right: 1rem;"
                            >
                            6 Dusun</div>
                        <div id="rt-rw" class="img-container">

                            <img src="{{ asset('assets/profil-desa/img/profil/house-icon.png') }}" alt="" width="50"
                                style="margin-right: 1rem;"
                            >
                            30 RT 9 RW</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>