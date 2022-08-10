<!doctype html>
<html lang="en">
<head>
    {{-- css yang digunakan  --}}
    <link rel="stylesheet" href="{{asset('assets/profil-desa/styles/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/profil-desa/styles/carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/profil-desa/styles/gallery.css') }}">

    {{-- script yang digunakan  --}}
    <script src="{{asset('assets/profil-desa/scripts/navbar.js') }}" async defer></script>

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
                    <a class="nav-link active mx-3 fs-5" href="#">Beranda</a>
                    <a class="nav-link active mx-3 fs-5" href="#profil">Profil</a>
                    <a class="nav-link active mx-3 fs-5" href="#pw">Potensi Wisata</a>
                    <a class="nav-link active mx-3 fs-5" href="#pu">Potensi UMKM</a>
                    <a class="nav-link active mx-3 fs-5" href="#lpdheader">Layanan</a>
                    <a class="nav-link active mx-3 fs-5" href="#gallery">Galeri</a>
                </div>
            </div>
        </div>
    </nav>
</div>

@include("profil.pages.profil")

<div class="container-fluid" id="puheader"></div>
<div class="container" id="pu">
    <div id="desktop-mode" style="height: 100%;width:100%">
        <div id="urousel" class="carousel slide carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner" id="warousel">

                @php
                    $i = 1;
                @endphp
                @foreach ($usahas as $usaha)
                    @if($i == 1)
                    <div class="carousel-item active" id="warousel">
                    @else
                    <div class="carousel-item" id="warousel">
                    @endif
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
                            <img src="{{ url('/data_file/usaha/'.$usaha->file) }}" class="d-block w-50" alt="...">
                        </div>
                    </div>
                </div>
                @php
                    $i++;
                @endphp
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
     </div><div id="mobile-mode" style="height: 100%;width:100%">
        <div id="urousel-mobile" class="carousel slide carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner" id="urousel-mobile">

                @php
                    $i = 1;
                @endphp
                @foreach ($usahas as $usaha)
                    @if($i == 1)
                    <div class="carousel-item active" id="urousel-mobile">
                    @else
                    <div class="carousel-item" id="urousel-mobile">
                    @endif
                    <div class="row" id="urousel-mobile">
                        <div class="container d-flex justify-content-center align-items-center">
                            {{--                            <img src="{{ "gambar" }}" class="d-block w-50" alt="...">--}}
                            <img src="{{ url('/data_file/usaha/'.$usaha->file) }}" class="d-block w-50" alt="...">
                        </div>
                        <div class="col d-flex justify-content-center align-items-center" id="wtext">
                            <p class="fw-semibold text-primary">{{ $usaha->nama_usaha }}</p>
                            <p class="fs-6">
                                {{ $usaha->deskripsi }}
                            </p>
                            <div id="wkontak">
                                <p id="wlink"> <img src="{{asset('assets/profil-desa/img/wisata/wloc.png')}}" id="wimg">{{"Lokasi UMKM"}}</p>
                                <p id="wlink"><img src="{{asset('assets/profil-desa/img/wisata/wtime.png')}}" alt="" id="wimg">{{ $usaha->jam_buka }} - {{ $usaha->jam_tutup }}</p>
                                <p id="link"><img src="{{asset('assets/profil-desa/img/wisata/wcontact.png')}}" alt="" id="wimg"><a href="https://wa.me/{{ $usaha->kontak }}">{{ $usaha->kontak }}</a></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                @php
                    $i++;
                @endphp
            @endforeach
        </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#urousel-mobile" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next" type="button" data-bs-target="#urousel-mobile" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
     </div>
    </div>
    </div>
    
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
            <div class="container-fluid d-flex align-items-center flex-column" id="lpdcontact">
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
            <div class="container-fluid d-flex align-items-center flex-column" id="lpdcontact">
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
    </div>
    {{-- <div class="row">
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
    </div> --}}
</div>
{{-- <div class="container-fluid" id="gheader"></div> --}}

{{-- <img id="gallery-header" src="{{ asset('assets/profil-desa/img/galeri/galeri-header.png') }}" alt=""> --}}

<div id="gheader" class="my-4">
</div>

<div class="mx-auto" id="gallery">
    @include('profil.pages.gallery')
</div>

<div class="container" id="anniv">
    <div id="arousel" class="carousel slide carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner" id="warousel">
            @foreach($kegiatans as $kegiatan)
                @if($loop->first)
                <div class="carousel-item active" id="warousel">
                @else
                <div class="carousel-item" id="warousel">
                @endif
                    <div class="row" id="warousel">
                        <div class="col d-flex justify-content-center align-items-center" id="wtext">
                            <p class="fs-5 fw-semibold text-primary">{{ $kegiatan->nama_kegiatan }}</p>
                            <p class="fs-6">
                                {{ $kegiatan->deskripsi }}
                            </p>
                            <div id="wkontak">
                                <p id="wlink"> <img src="{{asset('assets/profil-desa/img/wisata/wloc.png')}}" id="wimg">{{ $kegiatan->lokasi }}</p>
                                <p id="wlink"><img src="{{asset('assets/profil-desa/img/wisata/wtime.png')}}" alt="" id="wimg">{{ $kegiatan->tgl }}</p>
                                {{-- <p id="link"><img src="{{asset('assets/profil-desa/img/wisata/wcontact.png')}}" alt="" id="wimg">{{"No. telp"}}</p> --}}
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center align-items-center">
{{--                                <img src="{{ "gambar" }}" class="d-block w-50" alt="...">--}}
                            <img src="{{ url('/data_file/kegiatan/'.$kegiatan->file) }}" class="d-block w-50" alt="...">
                        </div>
                    </div>
                </div>
            @endforeach
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

    <div id=""></div>
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
    }
</script>
</body>

</html>
