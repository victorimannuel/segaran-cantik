<!doctype html>
<html lang="en">
<head>
    {{-- css yang digunakan  --}}
    <link rel="stylesheet" href="{{asset('assets/profil-desa/styles/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/profil-desa/styles/carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/profil-desa/styles/gallery.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    {{-- js yang digunakan  --}}
    <script src="{{asset('assets/profil-desa/scripts/modal.js')}}" defer></script>
    <script src="{{asset('assets/profil-desa/scripts/navbar.js')}}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous" defer></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Segaran | Home</title>
    <link rel="icon" type="image/x-icon" href={{ asset('assets/img/icons/logo-kkn-28.png') }}>
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
                        <a class="nav-link active fs-5" href="#">Beranda</a>
                        <a class="nav-link active fs-5" href="#profil">Profil</a>
                        <a class="nav-link active fs-5" href="#pwheader">Potensi Wisata</a>
                        <a class="nav-link active fs-5" href="#pu">Potensi UMKM</a>
                        <a class="nav-link active fs-5" href="#lpdheader">Layanan</a>
                        <a class="nav-link active fs-5" href="#gallery">Galeri</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div id="main-container" class="">
        <div id="home">
        </div>
        <div class="" id="profil">
            @include('profil.pages.profil')
        </div>

        <div class="" id="pwheader"></div>
        
        <div class="container-fluid" id="pw" >
            @include('profil.pages.potensi-wisata')
        </div>

        <div class="" id="puheader"></div>
        <div class="container" id="pu">
            @include('profil.pages.potensi-umkm')
        </div>
            
        </div>
        </div>
        <div class="contianer-fluid" id="lpdheader"></div>
        <div class="container-fluid" id="lpd">
            @include('profil.pages.perangkat-desa')
        </div>

        <div id="gheader" class="my-4">
        </div>
        
        <div class="mx-auto my-4" id="gallery">
            @include('profil.pages.gallery')
        </div>

        <div id="kegiatan-container" class="py-4">
            {{-- <h3 style="text-align: center">Kegiatan Tambahan</h3> --}}
            @include('profil.pages.kegiatan')
        </div>

        <div id="quotes" class="py-4" hidden>
            @include('profil.pages.quotes')
        </div>
        
    </div>

    <footer class="">
        @include('profil.pages.footer')
    </footer>
    
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
