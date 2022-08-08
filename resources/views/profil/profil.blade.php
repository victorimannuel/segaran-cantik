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

            @foreach ($usahas as $usaha)
                <div class="carousel-item active"id="warousel">
                    <div class="row" id="warousel">
                        <div class="col d-flex justify-content-center align-items-center" id="wtext">
                            <p class="fs-5 fw-semibold text-primary">{{ $usaha->nama_usaha }}</p>
                            <p class="fs-6">
                                {{ $usaha->deskripsi }}
                            </p>
                            <div id="wkontak">
                                <p id="wlink"> <img src="{{asset('assets/profil-desa/img/wisata/wloc.png')}}" id="wimg">{{"Lokasi UMKM"}}</p>
                                <p id="wlink"><img src="{{asset('assets/profil-desa/img/wisata/wtime.png')}}" alt="" id="wimg">{{ $usaha->jam_buka }} - {{ $usaha->jam_tutup }}</p>
                                <p id="link"><img src="{{asset('assets/profil-desa/img/wisata/wcontact.png')}}" alt="" id="wimg"><a href="https://wa.me/{{ $usaha->kontak }}">{{ $usaha->kontak }}</a></p>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center align-items-center">
{{--                            <img src="{{ "gambar" }}" class="d-block w-50" alt="...">--}}
                            <img src="{{ url('/usaha/'.$usaha->file) }}" class="d-block w-50" alt="...">
                        </div>
                    </div>
                </div>
            @endforeach
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
            <div class="row">
                <div class="col d-flex flex-column justify-content-center" id="gcol">
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/futsal.png') }}" alt="futsal" onclick="openModal();currentSlide(1)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/KKB.png') }}" alt="kkb" onclick="openModal();currentSlide(2)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/lahan.png') }}" alt="lahan" onclick="openModal();currentSlide(3)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/Posyandu.JPG') }}" alt="mpls" onclick="openModal();currentSlide(14)" />
                </div>
                <div class="col d-flex flex-column justify-content-center" id="gcol">
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/mpls.png') }}" alt="mpls" onclick="openModal();currentSlide(4)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/poskamling.png') }}" alt="poskamling" onclick="openModal();currentSlide(5)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/ramah.png') }}" alt="ramah" onclick="openModal();currentSlide(6)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/senam.png') }}" alt="senam" onclick="openModal();currentSlide(8)" />
                </div>
                <div class="col d-flex flex-column justify-content-center" id="gcol">
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/salat.png') }}" alt="salat" onclick="openModal();currentSlide(7)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/senam.png') }}" alt="senam" onclick="openModal();currentSlide(8)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/Terapi.png') }}" alt="terapi" onclick="openModal();currentSlide(9)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/TKK.png') }}" alt="tkk" onclick="openModal();currentSlide(10)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/posyandus.png') }}" alt="posyandus" onclick="openModal();currentSlide(13)" />
                </div>
                <div class="col d-flex flex-column justify-content-center" id="gcol">
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/TPQ.png') }}" alt="tpq" onclick="openModal();currentSlide(11)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/vaksinasi.png') }}" alt="vaksin" onclick="openModal();currentSlide(12)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/suro.JPG') }}" alt="suro" onclick="openModal();currentSlide(15)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/TPQ.png') }}" alt="tpq" onclick="openModal();currentSlide(11)" />

                </div>
                <div id="myModal" class="modal">
                    <div class="overlay"  onclick="closeModal()"></div>
                    <div class="modal-content">
                        <div class="mySlides">
                            {{-- <div class="numbertext">1 / 15</div> --}}
                            <div class="col d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('assets/profil-desa/img/galeri/futsal.png') }}" alt="" style="width: 60%"/>
                                <br />
                                <p>Quote pertemanan</p>
                                <br />
                                <p style="margin: 0 10% 0 10%">“Apa yang kita alami demi teman terkadang melelahkan dan menjengkelkan, namun itulah yang membuat persahabatan memiliki nilai keindahan.”</p>
                            </div>
                            <div class="col">
                                <h3>Kegiatan Futsal Sore Anak-Anak di Lapangan</h3>
                                <p id="gtx">
                                    Pemuda-pemuda desa biasnaya akan bermain bersama di lapangan setiap sore hari di lapangan sebagai bentuk sosial dan pertemanan mereka. Kebetulan, di desa ini terdapat lapangan yang cukup luas, sehingga dapat dipakai
                                    untuk bermain sepak bola, futsal, dan voli.
                                </p>
                                <p id="gtx">
                                    Selain digunakan untuk berolahraga, pemuda/pemudi sering menghabiskan waktu sorenya di lapangan ini untuk berswafoto atau bahkan hanya sekadar mengobrol saja menikmati senja karena posisinya yang tersorot oleh matahari
                                    ketika sore hari.
                                </p>
                                <p id="gtx">Banyaknya pohon yang rindang juga membuat golongan muda memilih spot lapangan sebagai tempat berkumpul mereka.</p>
                            </div>
                        </div>
                        <div class="mySlides">
                            {{-- <div class="numbertext">2 / 15</div> --}}
                            <div class="col d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('assets/profil-desa/img/galeri/KKB.png') }}" alt="" style="width: 50%; height: 70%; font-size: 10px" />
                            </div>
                            <div class="col">
                                <h3>Sosialisasi Kampung KB</h3>
                                <p id="gtx" style="font-size: 14px">
                                    Dalam rangka menerapkan prinsip Desa Cinta Statistik, Perangkat Desa Segaran melaksanakan program sosialisasi Kampung KB yang fokus pembahasannya ialah bagaimana agar data kependudukan warga selalu up-to-date dengan
                                    cepat agar tidak menghambat proses administrasi kependudukan. Data yang dimaksud dapat berupa pembaruan data KTP, alamat rumah, bahkan data kelahiran dan mortalitas.
                                </p>
                                <p id="gtx" style="font-size: 14px">
                                    Pada foto tersebut, tampak perwakilan setiap dusun menghadiri acara sosialisasi Kampung KB yang diadakan pada hari Senin, 25 Juli 2022. Kegiatan ini diharapkan dapat meningkatkan keluarga di Desa Segaran yang
                                    berkualitas.
                                </p>
                                <hr style="width: 90%; margin-left: 0px" />

                                <p id="gtx" style="font-size: 0.7em">Fakta Desa Segaran</p>
                                <p id="gtx" style="font-size: 0.7em">Desa Segaran sedang melangsungkan kegiatan-kegiatan untuk mendukung prinsip Desa Cantik (Cinta Statistik).</p>
                            </div>
                        </div>
                        <div class="mySlides">
                            {{-- <div class="numbertext">3 / 15</div> --}}
                            <div class="col d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('assets/profil-desa/img/galeri/lahan.png') }}" alt="" style="width: 50%; height: 70%" />
                            </div>
                            <div class="col">
                                <h3>Aktivitas Perawatan Lahan Pertanian</h3>
                                <p id="gtx">
                                    Desa Segaran terkenal dengan aktivitas bertaninya dengan macam-macam hasil pertaniannya, seperti tebu, bawang, jagung, dan masih banyak lagi.. Para petani cukup rajin merawat dan mengontrol tanamannya agar kualitas tetap
                                    terjaga ketika musim panen tiba.
                                </p>
                                <p id="gtx">
                                    Pada gambar tersebut, terdapat sejumlah petani yang giat merawat tanaman bawang di siang hari. Pada belakang petani, tampak tanaman tinggi seperti jagung. Mereka senantiasa memastikan bahwa hasil panen mereka dapat
                                    memuaskan pasar agar costumer relationship tetap terjaga.
                                </p>
                                <img src="{{ asset('assets/profil-desa/img/Hasil.png') }}" style="height: 75px" alt="" />
                            </div>
                        </div>
                        <div class="mySlides">
                            {{-- <div class="numbertext">4 / 15</div> --}}
                            <div class="col d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('assets/profil-desa/img/galeri/mpls.png') }}" alt="" style="width: 50%; height: 80%" />
                            </div>
                            <div class="col">
                                <h3>MPLS SMK 3 di Kolam Renang Sumber Loo</h3>
                                <p id="gtx">
                                    Pada tanggal 23 Juli 2022, SMK 3 di Desa Segaran sedang melangsungkan acara MPLS bagi seluruh siswa baru di Kolam Renang Sumber Loo yang berlokasi di wilayah Desa Segaran dengan tujuan mengenal teman baru satu sama lain
                                    sebelum akhirnya mereka bersekolah di SMK 3 tersebut.
                                </p>
                                <p id="gtx">
                                    Seluruh siswa tampak memakai seragam olahraga yang berbeda-beda. Hal tersebut terjadi karena mereka berasal dari SMP yang berbeda-beda pula dan sengaja memakai segaram tersebut agar mengetahui kawannya yang satu SMP.
                                </p>
                                <p id="gtx">Di sana, mereka berenang yang dipandu acaranya oleh pihak sekolah dan diawasi oleh beberapa guru olahraga agar keselamatan mereka tetap terjamin.</p>
                                <hr style="width: 90%; margin-left: 0" />
                                <p id="gtx">Fakta Kolam Renang Sumber Loo</p>
                                <p id="gtx">“Air yang berasal dari sumber mata air yang berada di bawah lokasi pemandian, yaitu mata air Sumber Loo”</p>
                            </div>
                        </div>
                        <div class="mySlides">
                            {{-- <div class="numbertext">5 / 15</div> --}}
                            <div class="col d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('assets/profil-desa/img/galeri/poskamling.png') }}" alt="" style="height: 80%" />
                            </div>
                            <div class="col">
                                <h3>Kegiatan Poskamling Dusun Krajen</h3>
                                <p id="gtx">
                                    Bagian dari kegiatan Desa Segaran yang sangat penting untuk menjaga keamanan di wilayah pedesaan ialah aktivitas poskamling atau ronda. Hal tersebut bertujuan agar warga merasa aman dan nyaman tinggal di desa karena
                                    sudah ada yang menjaga setiap malam.
                                </p>
                                <p id="gtx">
                                    Biasanya, warga laki-laki yang sudah dewasa atau paruh baya akan berkumpul bersama setiap malam di area poskamling dan berkeliling dusun secara bergilir sebagai bentuk untuk memastikan tidak ada bentuk kejahatan di malam
                                    hari di setiap dusunnya.
                                </p>
                                <img src="{{ asset('assets/profil-desa/img/Prinsip.png') }}" alt="" style="height: 20%" />
                            </div>
                        </div>
                        <div class="mySlides">
                            {{-- <div class="numbertext">6 / 15</div> --}}
                            <div class="col d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('assets/profil-desa/img/galeri/ramah.png') }}" alt="" style="height: 80%" />
                            </div>
                            <div class="col">
                                <h3>Sikap Ramah Tamah Warga Segaran</h3>
                                <p id="gtx">
                                    Warga Desa Segaran memang sudah dikenal akan kerukuran antarwarganya. Terbukti dari diundangnya warga sekitarnya untuk makan bersama. Hal tersebut cukup penting untuk mereduksi sikap individualis warga karena sejatinya
                                    kita akan membutuhkan tetangga sebagai orang terdekat dari rumah.
                                </p>
                                <p id="gtx">
                                    Dalam gambar tersebut, tampak warga sedang bersama-sama membakar sate kambing dan ayam untuk kemudian makan bersama sembari mengobrol agar semakin akrab. Momentum ini juga biasanya menjadi tempat bagi anak-anak untuk
                                    bermain dan melatih komunikasi mereka agar senantiasa percaya diri berinteraksi dengan sesama dan menghindari tumbuh sebagai manusia yang individualis.
                                </p>
                                <hr />
                                <p style="text-align: center" id="gtx">
                                    Dari Abū Dzarr radhiallahu 'anhu, beliau berkata, “Rasulullah ﷺ bersabda,
                                    <br />
                                    <b> 'Jika engkau memasak kuah, maka perbanyaklah airnya dan perhatikanlah tetangga-tetanggamu'</b>.”
                                </p>
                            </div>
                        </div>
                        <div class="mySlides">
                            {{-- <div class="numbertext">7 / 15</div> --}}
                            <div class="col d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('assets/profil-desa/img/galeri/salat.png') }}" alt="" />
                            </div>
                            <div class="col">
                                <h3>Salat Jum’at Dusun Krajen</h3>
                                <p id="gtx">
                                    Sudah menjadi kewajiban bagi umat muslim, terkhusus laki-laki untuk menunaikan salat Jum’at secara berjamaah. Warga laki-laki di Desa Segaran juga senantiasa saling mengajak berbondong-bondong untuk melakukan salat
                                    Jum’at di mesjid besar setiap dusunnya.
                                </p>
                                <p id="gtx">
                                    Gambar disamping menunjunkkan kegiatan pascasalat Jum’at di dusun Krajen yang ditutup dengan berdo’a bersama-sama. Seluruh spot masjid selalu terpenuhi dengan rapat. Hal tersebut menunjukkan bahwa seluruh warga sangat
                                    rajin melakukan kewajibannya sebagai umat muslim.
                                </p>
                                <img src="{{ asset('assets/profil-desa/img/timeline.png') }}" alt="" style="height: 15%" />
                            </div>
                        </div>
                        <div class="mySlides">
                            {{-- <div class="numbertext">8 / 15</div> --}}
                            <div class="col d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('assets/profil-desa/img/galeri/senam.png') }}" alt="" />
                            </div>
                            <div class="col">
                                <h3>Senam Lansia (Lanjut Usia)</h3>
                                <p id="gtx">
                                    Desa Segaran memiliki banyak program yang bermanfaat bagi seluruh warganya. Salah satunya ialah senam sehat yang diikuti oleh seluruh warga yang memasuki fase lanjut usia. Senam ini bernama Senam Lansia yang diadakan rutin setiap Jum’at pagi, sekitar pukul 09.00-11.00 WIB.
                                    <br>
                                    <br>
                                    Dengan dipandu oleh instruktur senam professional, gerakan senam ini memang khusus dibuat untuk golongan lansia, sehingga mudah diikuti dan membuat tubuh warga lansia jadi bugar.
                                    <br>
                                    <br>
                                    Senam ini bahkan dihadiri oleh desa-desa sebelah seperti Sumberejo karena kebermanfaatannya yang cukup bagus untuk menjaga kesehatan warga lansia.
                                </p>
                                <hr>
                                <p id="gtx" style="text-align: center;">
                                    <b>Slogan Lansia Segaran</b>
                                    <br><br>
                                    “Lansia, lansia Indonesia. Sudah tua, masih berguna!”
                                </p>
                            </div>
                        </div>
                        <div class="mySlides">
                            {{-- <div class="numbertext">9 / 15</div> --}}
                            <div class="col d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('assets/profil-desa/img/galeri/Terapi.png') }}" alt=""  style="height: 50% ;"/>
                                <p id="gtx" style="margin-left: 5%; margin-top:10%;">
                                    <b>Fakta Ling Tien Kung</b>
                                    <br>
                                    Beberapa gerakan dalam terapi tersebut cukup unik karena dinamai oleh hal-hal yang cukup asing, seperti membuka jendela langit dan belalang sembah.
                                </p>
                            </div>
                            <div class="col">
                                <h3>Kegiatan Terapi Ling Tien Kung</h3>
                                <p id="gtx">Setiap hari Selasa dan Sabtu sore, warga desa segaran yang sudah sesepuh melakukan kegiatan terapi Ling Tien Kung.
                                    <br><br>
                                    Kegiatan ini dilaksanakan sejak tahun 2017 yang dipelopori oleh Mbah Darmo yang merupakan seorang pensiunan. Kemudian kegiatan ini diteruskan dan memiliki pengikut hingga sekarang dengan tujuan kesehatan, kesembuhan, dan peremajaan.
                                    <br><br>
                                    Ling Tien Kung alias Ilmu Titik Nol adalah satu ilmu pengetahuan yang mempelajari tentang kebereadaan sebuah energi di dalam tubuh manusia. Penemunya adalah Awiek Wijaya (alias Fu Long Swee), seorang mantan atlet nasional yang pernah meraih medali emas di PON ke 5 salam cabang lompat jauh mewakili jawa timur.
                                </p>
                            </div>
                        </div>
                        <div class="mySlides">
                            {{-- <div class="numbertext">10 / 15</div> --}}
                            <div class="col d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('assets/profil-desa/img/galeri/TKK.png') }}" alt="" style="height: 50%;"/>
                                <p id="gtx"  style="margin: 10px 40px 10px 40px;">“Miskonsepsi yang sering kita lihat adalah bahwa pendidikan untuk anak usia dini ini terlihat hanya untuk membaca, menulis, berhitung, calistung. Padahal ini berbeda sebenarnya dengan ilmu pendidikan anak usia dini yang harus lebih menguatkan aspek yang lebih integratif dan yang lebih melakukan bermain.”
                                    <br>
                                    <b style="text-align:right;">-Irwan Syahril, Dirjen GTK Kemendikbudristek-</b>
                                </p>
                            </div>
                            <div class="col">
                                <h3>Kegiatan Operasional Taman Kanak-Kanak</h3>
                                <p id="gtx">Desa Segaran memiliki Taman Kanak-Kanak secara umum, yaitu TK A dan TK B. Proses pembangunan fasilitas masih dilakukan, sehingga proses pembelajaran masih dilakukan di dekat masjid besar Dusun Krajen.
                                    <br><br>
                                    Dalam foto tersebut, nampak anak-anak sedang ceria makan bersama. kegiatan tersebut merupakan kegiatan penutup sebelum akhirnya anak-anak bergegas untuk pulang.
                                    <br><br>
                                    Dalam proses pembelajarannya, TK sudah menyesuaikan dengan kurikulum merdeka, sehingga mereka lebih dibimbing untuk berinteraksi daripada belajar untuk mengingat materi. Hampir seluruh kegiatannya akan dilakukan dengan cara bernyanyi bersama agar lebih digemari dan mudah diingat oleh seluruh anak-anak.
                                </p>
                            </div>
                        </div>
                        <div class="mySlides">
                            {{-- <div class="numbertext">11 / 15</div> --}}
                            <div class="col d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('assets/profil-desa/img/galeri/TPQ.png') }}" alt="" style="height: 50%;"/>
                                <p id="gtx"  style="padding: 10px 40px 10px 40px;">
                                    “Rasulullah shallallahu ‘alaihi wasallam bersabda: <b> “Siapa yang membaca satu huruf dari Al Quran maka baginya satu kebaikan dengan bacaan tersebut, satu kebaikan dilipatkan menjadi 10 kebaikan.”</b>
                                </p>
                                <p id="gtx" style="width: 100%; text-align: center;">(H.R. Tirmidzi)</p>
                            </div>
                            <div class="col">
                                <h3>Kegiatan Tempat Pembelajaran Qur’an (TPQ)</h3>
                                <p id="gtx">Setiap sore hari, anak-anak yang beragama Islam (muslim) biasanya akan berkumpul untuk pergi ke masjid besar di setiap dusunnya untuk kegiatan TPQ yang diajarkan langsung oleh Ustadz.
                                    <br><br>
                                    Anak-anak akan didampingi untuk mengaji satu-satu dengan cara mengantre sampai habis, kemudian akan berdo’a bersama dan kegiatan pengajaran tajwid guna memperlancar dan memperindah bacaan Al-Qur’an.
                                    <br><br>
                                    Foto tersebut diambil di Dusun Krajan yang mana terlihat antusias mereka dalam menuntut ilmu. Hal tersebut salah satu bentuk pengamalan spiritual mereka agar tumbuh dan berkembang sebagai insan cendekiawan yang cinta Al-Qur’an.
                                </p>
                            </div>
                        </div>
                        <div class="mySlides">
                            {{-- <div class="numbertext">12 / 15</div> --}}
                            <div class="col d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('assets/profil-desa/img/galeri/vaksinasi.png') }}" style="height: 80%;" alt="" />
                            </div>
                            <div class="col">
                                <h3>Vaksinasi Covid-19 Desa Segaran</h3>
                                <p id="gtx">Dalam rangka menjaga kesehatan warga, Desa Segaran telah melakukan beberapa kali vaksinasi Covid-19. Umumnya, proses vaksinasi dilakukan di kantor balai desa. Proses vaksinasi dilakukan secara sistematis dengan banyaknya tenaga medis yang membantu. Vaksinasi yang diberikan yaitu vaksin Covid-19 dosis pertama, kedua, dan vaksin <i> booster</i>.
                                    <br><br>
                                    Pada hari Senin, 25 Juli 2022, Desa Segaran melangsungkan vaksinasi kembali dengan dihadiri banyak warga di berbagai Dusun. Proses vaksinasi juga dilaksanakan bersamaan dengan program kampung KB yang membahas tentang urgensi data. Pada hari tersebut, terdapat juga mahasiswa Universitas Brawijaya yang sedang melakukan KKN di Desa Segaran dan ikut membantu proses administrasi vaksinasi dan mengamati acara program kampung KB.
                                <hr>
                                </p>
                                <img src="{{ asset('assets/profil-desa/img/time.png') }}" alt="" style="height: 15%;">
                            </div>
                        </div>
                        <div class="mySlides">
                            {{-- <div class="numbertext">13 / 15</div> --}}
                            <div class="col d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('assets/profil-desa/img/galeri/posyandus.png') }}" alt="" style="height: 100% ;"/>
                            </div>
                            <div class="col">
                                <h3>Kegiatan Perkumpulan PKK</h3>
                                <p id="gtx">
                                    Setiap bulannya, wanita paruh baya di Desa Segaran berkumpul di balai Desa untuk membahas program-program kesejahteraan warga. Adapun cakupan kegiatan yang biasa dilakukan ialah kegiatan posyandu, menu sehat keluarga, program penyuluhan emansipasi, dan sebagainya.
                                    <br><br>
                                    Pada foto di samping, kegiatan PKK dilakukan pada hari Rabu, 27 Juli 2022 yang khusus membahas perencanaan Agustusan dan imunisasi anak nasional serentak satu Indonesia. Setiap dusunnya, mengirim perwakilan untuk mengikuti penyuluhan ini agar mendapat informasi yang sinergis dan terpusat dari desa. Adapun proses imunisasi anak nasional akan dilakukan secara serentak pada tanggal 2 Agustus 2022.
                                </p>
                            </div>
                        </div>
                        <div class="mySlides">
                            {{-- <div class="numbertext">14 / 15</div> --}}
                            <div class="col d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('assets/profil-desa/img/galeri/Posyandu.JPG') }}" alt="" style="height: 30em ;"/>
                            </div>
                            <div class="col">
                                <h3>Kegiatan BIAN</h3>
                                <p id="gtx">
                                    Dalam rangka memperingati Bulan Imunisasi Anak Nasional (BIAN), Desa Segaran juga ikut mengadakan kegiatan imunisasi di posyandu. BIAN adalah upaya yang dicanangkan oleh Kementerian Kesehatan tahun 2022 untuk meningkatkan cakupan imunisasi rutin anak yang sempat menurun selama pandemi covid-19. BIAN sendiri merupakan kegiatan pemberian imunisasi tambahan Campak-Rubela dan pemberian imunisasi pada anak yang belum mendapatkan vaksin lengkap.
                                    <br><br>
                                    Kegiatan BIAN pada Desa Segaran dilaksanakan pada hari Selasa, 2 Agustus 2022. Imunisasi dilakukan pada masing-masing dusun (Krajan 1, Krajan 2, Putat, Sumberbanteng, Sumberkotes Kulon, Sumberkotes Wetan, Sumberjabon Wetan, Sumberjabon Kulon) pada tempat yang sudah disepakati untuk dijadikan posko kegiatan.
                                </p>
                            </div>
                        </div>
                        <div class="mySlides">
                            {{-- <div class="numbertext">15 / 15</div> --}}
                            <div class="col d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('assets/profil-desa/img/galeri/suro.JPG') }}" alt="" style="height:30em"/>
                            </div>
                            <div class="col">
                                <h3>Kegiatan Suroan</h3>
                                <p id="gtx">
                                    Suroan adalah tradisi turun menurun yang masih dilaksanakan masyarakat jawa sampai sekarang. Masyarakat Desa Segaran yang juga masih kental dengan budaya dan adat jawa juga selalu melaksanakan tradisi suroan untuk memperingati 1 Muharram atau yang lebih dikenal dengan 1 suro.  Tahun ini (2022), 1 suro jatuh pada tanggal 30 Juli 2022 dan Desa Segaran merayakan tradisi ini pada hari Senin, 2 Juli 2022. Suroan menitikberatkan pada ketentaman batin dan keselamatan. Ritual ini juga diselingi dengan pembacaan doa dari semua orang yang hadir denagn tujuan mendapatkan berkah dan menangkal marabahaya.                  <br><br>
                                    Pada foto di samping, kegiatan PKK dilakukan pada hari Rabu, 27 Juli 2022 yang khusus membahas perencanaan Agustusan dan imunisasi anak nasional serentak satu Indonesia. Setiap dusunnya, mengirim perwakilan untuk mengikuti penyuluhan ini agar mendapat informasi yang sinergis dan terpusat dari desa. Adapun proses imunisasi anak nasional akan dilakukan secara serentak pada tanggal 2 Agustus 2022.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="anniv">
            <div id="arousel" class="carousel slide carousel-dark slide" data-bs-ride="carousel">
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
                                        <p id="wlink"> <img src="{{asset('assets/profil-desa/img/wisata/wloc.png')}}" id="wimg">{{"Lokasi Kegiatan"}}</p>
                                        <p id="wlink"><img src="{{asset('assets/profil-desa/img/wisata/wtime.png')}}" alt="" id="wimg">{{"Waktu Kegiatan"}}</p>
                                        {{-- <p id="link"><img src="{{asset('assets/profil-desa/img/wisata/wcontact.png')}}" alt="" id="wimg">{{"No. telp"}}</p> --}}
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-center align-items-center">
                                    <img src="{{ "gambar" }}" class="d-block w-50" alt="...">
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#arousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#arousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script>if (
        event.target.matches(".button-close-modal") ||
        !event.target.closest(".modal")
    ) {
        closeModal()
    }
    // Open the Modal
    function openModal() {
        document.getElementById("myModal").style.display = "flex";
    }
    // Close the Modal
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }
    var slideIndex = 1;
    showSlides(slideIndex);
    // Next/previous controls
    function plusSlides(n) {
        showSlides((slideIndex += n));
    }
    // Thumbnail image controls
    function currentSlide(n) {
        showSlides((slideIndex = n));
    }
    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "flex";
    }</script>
</body>
</html>
