
<div class="container-fluid" id="profil">
    <div class="row align-items-center">
        <div class="col" id="profil1">
            <img src="{{asset('assets/profil-desa/img/profil/profile-img.png')}}" alt="">
        </div>
        <div class="col" id="profil">
            <p id="profile-title">Malang</p>
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
    <div class="container-fluid" id="pwheader"></div>

    <div class="container-fluid" id="pw" >
        <div class="container-fluid" id="desktop-mode">
            <div id="warousel" class="carousel slide carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner" id="warousel">
                    <div class="carousel-item active" id="warousel">
                        <div class="row " id="warousel">
                            <div class="col d-flex justify-content-center align-items-center" id="wtext">
                                <p class="fs-5 fw-semibold text-primary">Pemandian Sumber Loo</p>
                                <p class="fs-6">Desa Segaran memiliki tempat pemandian berbentuk kolam renang yang sangat luas (berjumlah dua kolam; kolam anak dan kolam dewasa) yang sumber airnya berasal langsung dari mata air Sumber Loo, sehingga terjaga keasrian air yang benar-benar segar tanpa mengandung zat kimia apapun seperti kaporit.</p>
                                <div id="wkontak">
                                    <a href="https://g.page/pemandian-sumber-loo?share" id="wlink"><img src="{{asset('assets/profil-desa/img/wisata/wloc.png')}}" alt="" id="wimg">Sumber Loo, Jl. Raya Segaran, RT.09/RW.03, Sumberrejo Krajan, Segaran, 65178</a>
                                    <p id="wlink"> <img src="{{asset('assets/profil-desa/img/wisata/wtime.png')}}" id="wimg"> Setiap hari, Jum'at libur (07.30 - 16.00)</p>
                                    <a href="https://wa.me/6283837908426" id="wlink"><img src="{{asset('assets/profil-desa/img/wisata/wcontact.png')}}" alt="" id="wimg">083837908426</a>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center" >
                                <img src="../assets/profil-desa/img/wisata/loo.png" class="d-block w-50" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item"id="warousel">
    
                        <div class="row" id="warousel">
                            <div class="col d-flex justify-content-center align-items-center" id="wtext">
                                <p class="fs-5 fw-semibold text-primary">Gunung Wali Kukun</p>
                                <p class="fs-6">Pada Desa Segaran, di bagian Dusun Krajen, terdapat satu gunung bernama Wali Kukuh yang cukup indah karena di sepanjang jalan nampak banyak bunga-bunga dan tanaman yang bervariasi. Pada gambar tersebut, terdapat satu tempat yang beberapa warga sekitar anggap suci karena terdapat suatu makam keramat yang hanya orang-orang tertentu saja yang dapat mengakses dan masuk ke dalam pemakaman tersebut.</p>
                                <div id="wkontak">
                                    <a href="https://goo.gl/maps/DcCBwCDZd3R8Kx1B7" id="wlink"><img src="{{asset('assets/profil-desa/img/wisata/wloc.png')}}" alt="" id="wimg">Sumberbanteng Wetan, Segaran, Gedangan</a>
                                    <p id="wlink"> <img src="{{asset('assets/profil-desa/img/wisata/wtime.png')}}" id="wimg"> Setiap hari</p>
                                    <p id="wlink"><img src="{{asset('assets/profil-desa/img/wisata/wcontact.png')}}" alt="" id="wimg">-</p>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <img src="../assets/profil-desa/img/wisata/gwk.png" class="d-block w-50" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item"id="warousel">
    
                        <div class="row" id="warousel">
                            <div class="col d-flex justify-content-center align-items-center" id="wtext">
                                <p class="fs-5 fw-semibold text-primary">Gunung Kapur</p>
                                <p class="fs-6">Tempat yang cukup digemari oleh baik warga lokal maupun luar Segaran yaitu Gunung Kapur yang letaknya di Dusun Sumberbanteng Wetan. Tempatnya sangat indah dengan pemandangan tanah kapur yang seperti bukit.
                                    <br>
                                    Namun, tempat ini sudah ditutup sejak pandemi Covid-19 muncul.
                                </p>
                                <div id="wkontak">
                                    <a href="https://goo.gl/maps/nqJMTQPYEzrjcqx59" id="wlink"><img src="{{asset('assets/profil-desa/img/wisata/wloc.png')}}" alt="" id="wimg">Sumberbanteng Wetan, Segaran, Gedangan</a>
                                    <p id="wlink"> <img src="{{asset('assets/profil-desa/img/wisata/wtime.png')}}" id="wimg"> Sudah ditutup</p>
                                    <p id="wlink"><img src="{{asset('assets/profil-desa/img/wisata/wcontact.png')}}" alt="" id="wimg">-</p>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <img src="../assets/profil-desa/img/wisata/kapur.png" class="d-block w-50" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
    
                <button class="carousel-control-prev" type="button" data-bs-target="#warousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#warousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div id="mobile-mode">
            <div id="warousel-mobile" class="carousel slide carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner" id="warousel-mobile">
                    <div class="carousel-item active" id="warousel-mobile">
                        <div class="row " id="warousel-mobile">
                            <div class="container d-flex justify-content-center align-items-center" >
                                <img src="../assets/profil-desa/img/wisata/loo.png" class="d-block w-50" alt="...">
                            </div>
                            <div class="container col d-flex justify-content-center align-items-center" id="wtext">
                                <p class="fs-5 fw-semibold text-primary">Pemandian Sumber Loo</p>
                                <p style="font-size:75% ">Desa Segaran memiliki tempat pemandian berbentuk kolam renang yang sangat luas (berjumlah dua kolam; kolam anak dan kolam dewasa) yang sumber airnya berasal langsung dari mata air Sumber Loo, sehingga terjaga keasrian air yang benar-benar segar tanpa mengandung zat kimia apapun seperti kaporit.</p>
                                <div id="wkontak">
                                    <a href="https://g.page/pemandian-sumber-loo?share" id="wlink"><img src="{{asset('assets/profil-desa/img/wisata/wloc.png')}}" alt="" id="wimg">Sumber Loo, Jl. Raya Segaran, RT.09/RW.03, Sumberrejo Krajan, Segaran, 65178</a>
                                    <p id="wlink"> <img src="{{asset('assets/profil-desa/img/wisata/wtime.png')}}" id="wimg"> Setiap hari, Jum'at libur (07.30 - 16.00)</p>
                                    <a href="https://wa.me/6283837908426" id="wlink"><img src="{{asset('assets/profil-desa/img/wisata/wcontact.png')}}" alt="" id="wimg">083837908426</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="carousel-item"id="warousel-mobile">
    
                        <div class="row" id="warousel-mobile">
                            <div class="container d-flex justify-content-center align-items-center">
                                <img src="../assets/profil-desa/img/wisata/gwk.png" class="d-block w-50" alt="...">
                            </div>
                            <div class="container col d-flex justify-content-center align-items-center" id="wtext">
                                <p class="fs-5 fw-semibold text-primary">Gunung Wali Kukun</p>
                                <p style="font-size:75% ">Pada Desa Segaran, di bagian Dusun Krajen, terdapat satu gunung bernama Wali Kukuh yang cukup indah karena di sepanjang jalan nampak banyak bunga-bunga dan tanaman yang bervariasi. Pada gambar tersebut, terdapat satu tempat yang beberapa warga sekitar anggap suci karena terdapat suatu makam keramat yang hanya orang-orang tertentu saja yang dapat mengakses dan masuk ke dalam pemakaman tersebut.</p>
                                <div id="wkontak">
                                    <a href="https://goo.gl/maps/DcCBwCDZd3R8Kx1B7" id="wlink"><img src="{{asset('assets/profil-desa/img/wisata/wloc.png')}}" alt="" id="wimg">Sumberbanteng Wetan, Segaran, Gedangan</a>
                                    <p id="wlink"> <img src="{{asset('assets/profil-desa/img/wisata/wtime.png')}}" id="wimg"> Setiap hari</p>
                                    <p id="wlink"><img src="{{asset('assets/profil-desa/img/wisata/wcontact.png')}}" alt="" id="wimg">-</p>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                    <div class="carousel-item"id="warousel-mobile">
    
                        <div class="row" id="warousel-mobile">
                            <div class="container d-flex justify-content-center align-items-center">
                                <img src="../assets/profil-desa/img/wisata/kapur.png" class="d-block w-50" alt="...">
                            </div>
                            <div class="container col d-flex justify-content-center align-items-center" id="wtext">
                                <p class=" fw-semibold text-primary">Gunung Kapur</p>
                                <p style="font-size:75% ">Tempat yang cukup digemari oleh baik warga lokal maupun luar Segaran yaitu Gunung Kapur yang letaknya di Dusun Sumberbanteng Wetan. Tempatnya sangat indah dengan pemandangan tanah kapur yang seperti bukit.
                                    <br>
                                    Namun, tempat ini sudah ditutup sejak pandemi Covid-19 muncul.
                                </p>
                                <div id="wkontak">
                                    <a href="https://goo.gl/maps/nqJMTQPYEzrjcqx59" id="wlink"><img src="{{asset('assets/profil-desa/img/wisata/wloc.png')}}" alt="" id="wimg">Sumberbanteng Wetan, Segaran, Gedangan</a>
                                    <p id="wlink"> <img src="{{asset('assets/profil-desa/img/wisata/wtime.png')}}" id="wimg"> Sudah ditutup</p>
                                    <p id="wlink"><img src="{{asset('assets/profil-desa/img/wisata/wcontact.png')}}" alt="" id="wimg">-</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
    
                <button class="carousel-control-prev" type="button" data-bs-target="#warousel-mobile" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#warousel-mobile" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>