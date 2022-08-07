<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('assets/profil-desa/styles/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/profil-desa/styles/carousel.css')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Segaran | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid" id="container">
    <nav class="navbar navbar-expand-lg bg-light fixed-top" style="--bs-bg-opacity: .7;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center " id="navbarNavAltMarkup">
                <div class="navbar-nav" style="">
                    <a class="nav-link active fw-semibold" href="#">Beranda</a>
                    <a class="nav-link active fw-semibold" href="#profil">Profil</a>
                    <a class="nav-link active fw-semibold" href="#pw">Potensi Wisata</a>
                    <a class="nav-link active fw-semibold" href="#pu">Potensi UMKM</a>
                    <a class="nav-link active fw-semibold" href="#lpdheader">Layanan</a>
                    <a class="nav-link active fw-semibold" href="#gallery">Galeri</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<div class="container-fluid" id="profil">
    <div class="row align-items-center">
        <div class="col" id="profil1">
        </div>
        <div class="col" id="profil">
            <p style="margin-top: 15vh ; font-size:150%;">Malang</p>
            <p style="font-size: 200%">Desa Segaran </p>
            <p class="fs-6" style="margin-right: 10%;"> Desa Segaran adalah desa yang tidak begitu ramai, tetapi selalu memiliki banyak cerita unik. Sebagian besar penduduk Desa Segaran bercocok tanam sebagai sumber pendapatan. Produk yang dihasilkan tidak hanya tebu, tetapi juga batu kapur dari hasil tambang. Produk - produk tersebut banyak dikirim kepada pengolah batu kapur di daerah Druju, Sumberejo, dan di daerah Turen.</p>
            <span id="luas" style="width:10rem;text-align:center;border-bottom:2px solid black; "> <img src="{{asset('assets/profil-desa/img/profil/luas.png')}}" alt="" style="margin-bottom: 0.3em"> ±11 km²</span>
            {{-- Dinamis --}}
            <span id="penduduk" style="margin-left: 3%"><img src="{{asset('assets/profil-desa/img/profil/people-icon.png')}}" style="height: 30px" alt="">{{"Jumlah Penduduk"}}</span>

            <div >

                <div class="row" id="offset">
                    <div class="col">
                        <a href="https://goo.gl/maps/BAuxNnzwVsfAezfMA">
                            <img id="peta-segaran" src="{{ asset('assets/profil-desa/img/profil/peta-segaran.png') }}" alt="" class="img-fluid" >
                        </a>
                    </div>
                    <div class="col">
                        {{-- Dinamis --}}
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
    <div class="container-fluid" id="pwheader"></div>

    <div class="container-fluid" id="pw" >
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
</div>
<div class="container-fluid" id="puheader"></div>
<div class="container" id="pu">
    <div id="urousel" class="carousel slide carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner" id="warousel">

            @for ($i = 0; $i < 4; $i++)
                <div class="carousel-item active"id="warousel">
                    <div class="row" id="warousel">
                        <div class="col d-flex justify-content-center align-items-center" id="wtext">
                            <p class="fs-5 fw-semibold text-primary">{{ "Judul "}}</p>
                            <p class="fs-6">
                                {{"Deskripsi"}}
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius, ab!
                            </p>
                            <div id="wkontak">
                                <p id="wlink"> <img src="{{asset('assets/profil-desa/img/wisata/wloc.png')}}" id="wimg">{{"Lokasi UMKM"}}</p>
                                <p id="wlink"><img src="{{asset('assets/profil-desa/img/wisata/wtime.png')}}" alt="" id="wimg">{{"Jam operasional"}}</p>
                                <p id="link"><img src="{{asset('assets/profil-desa/img/wisata/wcontact.png')}}" alt="" id="wimg">{{"No. telp"}}</p>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center align-items-center">
                            <img src="{{ "gambar" }}" class="d-block w-50" alt="...">
                        </div>
                    </div>
                </div>
            @endfor
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#urousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#urousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="contianer-fluid" id="lpdheader"></div>
<div class="container-fluid" id="lpd">
    <div class="row" id="">
        <div class="col">
            <div class="container-fluid d-flex align-items-center flex-column" id="lpdcontact">
                <img src="{{asset('assets/profil-desa/img/kades.png')}}" alt="" id="lpdimg">
                <div class="container d-flex align-items-start flex-column">
                    <p>
                        <br>
                    <p class="fs-3 fw-semibold">H. Tasan</p>
                    <hr style="width: 100%">
                    <p class="fs-6">Kepala Desa</p>
                    <a href="https://wa.me/6282229459533"><img src="{{asset('assets/profil-desa/img/waicon.png')}}" alt="" id="waicon">0822-2945-9533</a>
                    </p>
                </div>
            </div>
            <div class="container-fluid d-flex align-items-center flex-column" id="lpdcontact">
                <img src="{{asset('assets/profil-desa/img/keuangan.png')}}" alt="" id="lpdimg">
                <div class="container d-flex align-items-start flex-column">
                    <p>
                        <br>
                    <p class="fs-3 fw-semibold">Moh. Rokip</p>
                    <hr style="width: 100%">
                    <p class="fs-6">Kaur Keuangan</p>
                    <a href="https://wa.me/6285100675906"><img src="{{asset('assets/profil-desa/img/waicon.png')}}" alt="" id="waicon">0851-0067-5906</a>
                    </p>
                </div>
            </div>
            <div class="container-fluid d-flex align-items-center flex-column" id="lpdcontact">
                <img src="{{asset('assets/profil-desa/img/Kesejahteraan.png')}}" alt="" id="lpdimg">
                <div class="container d-flex align-items-start flex-column">
                    <p>
                        <br>
                    <p class="fs-3 fw-semibold">Muslimin</p>
                    <hr style="width: 100%">
                    <p class="fs-6">Kasi Kesejahteraan</p>
                    <a href="https://wa.me/6285854215179"><img src="{{asset('assets/profil-desa/img/waicon.png')}}" alt="" id="waicon">0858-5421-5179</a>
                    </p>
                </div>
            </div>
            <div class="container-fluid d-flex align-items-center flex-column" id="lpdcontact">
                <img src="{{asset('assets/profil-desa/img/kasunsw.png')}}" alt="" id="lpdimg">
                <div class="container d-flex align-items-start flex-column">
                    <p>
                        <br>
                    <p class="fs-3 fw-semibold">Budi Ariadi</p>
                    <hr style="width: 100%">
                    <p style="font-size: 12px">Kasun Sumberkotes Wetan</p>
                    <a href="https://wa.me/6285233415988"><img src="{{asset('assets/profil-desa/img/waicon.png')}}" alt="" id="waicon">0852-3341-5988</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="container-fluid d-flex align-items-center flex-column" id="lpdcontact">
                <img src="{{asset('assets/profil-desa/img/sekre.png')}}" alt="" id="lpdimg">
                <div class="container d-flex align-items-start flex-column">
                    <p>
                        <br>
                    <p class="fs-4 fw-semibold">Sutikno Adiyat</p>
                    <hr style="width: 100%">
                    <p class="fs-6">Sekretaris Desa</p>
                    <a href="https://wa.me/6281259071106"><img src="{{asset('assets/profil-desa/img/waicon.png')}}" alt="" id="waicon">0812-5907-1106</a>
                    </p>
                </div>
            </div>
            <div class="container-fluid d-flex align-items-center flex-column" id="lpdcontact">
                <img src="{{asset('assets/profil-desa/img/perencanaan.png')}}" alt="" id="lpdimg">
                <div class="container d-flex align-items-start flex-column">
                    <p>
                        <br>
                    <p class="fs-3 fw-semibold">Paiman</p>
                    <hr style="width: 100%">
                    <p class="fs-6">Kaur Perencanaan</p>
                    <a href="https://wa.me/6282232582614"><img src="{{asset('assets/profil-desa/img/waicon.png')}}" alt="" id="waicon">0822-3258-2614</a>
                    </p>
                </div>
            </div>
            <div class="container-fluid d-flex align-items-center flex-column" id="lpdcontact">
                <img src="{{asset('assets/profil-desa/img/Pelayanan.png')}}" alt="" id="lpdimg">
                <div class="container d-flex align-items-start flex-column">
                    <p>
                        <br>
                    <p class="fs-3 fw-semibold">M. Muhtadi</p>
                    <hr style="width: 100%">
                    <p class="fs-6">Kasi Pelayanan</p>
                    <a href="https://wa.me/6285646597809"><img src="{{asset('assets/profil-desa/img/waicon.png')}}" alt="" id="waicon">0856-4659-7809</a>
                    </p>
                </div>
            </div>
            <div class="container-fluid d-flex align-items-center flex-column" id="lpdcontact">
                <img src="{{asset('assets/profil-desa/img/kasunsj.png')}}" alt="" id="lpdimg">
                <div class="container d-flex align-items-start flex-column">
                    <p>
                        <br>
                    <p class="fs-3 fw-semibold">Abdurrohman</p>
                    <hr style="width: 100%">
                    <p class="fs-6">Kasun Sumberjabon</p>
                    <a href="https://wa.me/6282142552910"><img src="{{asset('assets/profil-desa/img/waicon.png')}}" alt="" id="waicon">0821-4255-2910</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="container-fluid d-flex align-items-center flex-column" id="lpdcontact">
                <img src="{{asset('assets/profil-desa/img/kaurtu.png')}}" alt="" id="lpdimg">
                <div class="container d-flex align-items-start flex-column">
                    <p>
                        <br>
                    <p class="fs-5 fw-semibold">Bambang Said</p>
                    <hr style="width: 100%">
                    <p style="font-size: 13px">Kaur Tata Usaha & Umum</p>
                    <a href="https://wa.me/6281249715874"><img src="{{asset('assets/profil-desa/img/waicon.png')}}" alt="" id="waicon">0812-4971-5874</a>
                    </p>
                </div>
            </div>
            <div class="container-fluid d-flex align-items-center flex-column" id="lpdcontact">
                <img src="{{asset('assets/profil-desa/img/kaurpemerintah.png')}}" alt="" id="lpdimg">
                <div class="container d-flex align-items-start flex-column">
                    <p>
                        <br>
                    <p class="fs-5 fw-semibold">Sungeb Mu'alim</p>
                    <hr style="width: 100%">
                    <p class="fs-6">Kasi Pemerintahan</p>
                    <a href="https://wa.me/6282337722122"><img src="{{asset('assets/profil-desa/img/waicon.png')}}" alt="" id="waicon">0823-3772-2122</a>
                    </p>
                </div>
            </div>
            <div class="container-fluid d-flex align-items-center flex-column" id="lpdcontact">
                <img src="{{asset('assets/profil-desa/img/kasunsb.png')}}" alt="" id="lpdimg">
                <div class="container d-flex align-items-start flex-column">
                    <p>
                        <br>
                    <p class="fs-3 fw-semibold">H. Sabar</p>
                    <hr style="width: 100%">
                    <p style="font-size: 16px">Kasun Sumberbanteng</p>
                    <a href="https://wa.me/6282337983245"><img src="{{asset('assets/profil-desa/img/waicon.png')}}" alt="" id="waicon">0823-3798-3245</a>
                    </p>
                </div>
            </div>
            <div class="container-fluid d-flex align-items-center flex-column" id="lpdcontact">
                <img src="{{asset('assets/profil-desa/img/kasunkrajan.png')}}" alt="" id="lpdimg">
                <div class="container d-flex align-items-start flex-column">
                    <p>
                        <br>
                    <p class="fs-4 fw-semibold">Sri Indriyatno</p>
                    <hr style="width: 100%">
                    <p class="fs-6">Kasun Krajan</p>
                    <a href="https://wa.me/6282234089218"><img src="{{asset('assets/profil-desa/img/waicon.png')}}" alt="" id="waicon">0822-3408-9218</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="container-fluid d-flex align-items-center flex-column" id="lpdcontact2">
                <img src="{{asset('assets/profil-desa/img/kasunp.png')}}" alt="" id="lpdimg">
                <div class="container d-flex align-items-start flex-column">
                    <p>
                        <br>
                    <p class="fs-3 fw-semibold">Didik</p>
                    <hr style="width: 100%">
                    <p class="fs-6">Kasun Putat</p>
                    <a href="https://wa.me/6285746637958"><img src="{{asset('assets/profil-desa/img/waicon.png')}}" alt="" id="waicon">0857-4663-7958</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="container-fluid d-flex align-items-center flex-column" id="lpdcontact2">
                <img src="{{asset('assets/profil-desa/img/Vector.png')}}" alt="" id="lpdimg">
                <div class="container d-flex align-items-start flex-column">
                    <p>
                        <br>
                    <p class="fs-4 fw-semibold">-</p>
                    <hr style="width: 100%">
                    <p class="fs-6">Kasun Sumberkotes Kulon</p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="gheader"></div>
<div class="container-fluid" id="gallery">

    <div class="row">
        <div class="col d-flex flex-column justify-content-center">

        </div>
        <div class="col d-flex flex-column justify-content-center"></div>
        <div class="col d-flex flex-column justify-content-center"></div>
        <div class="col d-flex flex-column justify-content-center"></div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
