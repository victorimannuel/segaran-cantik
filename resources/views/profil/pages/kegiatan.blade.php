<div class="desktop my-5" hidden>
    <div id="kerousel" class="desktop carousel slide carousel-dark slide d-flex justify-content-center align-items-center" data-bs-ride="carousel">
        <div class="carousel-inner" id="">
            @foreach ($kegiatans as $kegiatan)
            @if($loop->first)
            <div class="carousel-item active" id="">
            @else
            <div class="carousel-item" id="">
            @endif
                <div class="row warousel-row m-auto">
                    <div class="col d-flex flex-column justify-content-center align-items-center" class="wtext">
                        <p class="fs-2 fw-semibold text-primary">
                            {{ $kegiatan->nama_kegiatan }}
                        </p>
                        <p class="fs-5">
                            {{ $kegiatan->deskripsi }}
                        </p>
                        <div class="wkontak">
                            <a href="https://g.page/pemandian-sumber-loo?share" class="wlink">
                                <img src="{{asset('assets/profil-desa/img/wisata/wloc.png')}}" class="wimg">{{"Lokasi UMKM"}}
                            </a>
                            <p class="wlink"> 
                                <img src="{{asset('assets/profil-desa/img/wisata/wtime.png')}}" alt="" class="wimg">{{ $kegiatan->jam_buka }} - {{ $kegiatan->jam_tutup }}
                            </p>
                            <p class="wlink">
                                <img src="{{asset('assets/profil-desa/img/wisata/wcontact.png')}}" alt="" id="wimg"><a href="https://wa.me/{{ $kegiatan->kontak }}">{{ $kegiatan->kontak }}</a>
                            </p>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        <img class="wisata-img" src="{{ url('/data_file/kegiatan/'.$kegiatan->file) }}" class="d-block w-50" alt="...">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    
        <button class="carousel-control-prev" type="button" data-bs-target="#kerousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#kerousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="mobile-mode my-5" hidden>
    <div id="kerousel-mobile" class="carousel slide carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner" id>
                @foreach ($kegiatans as $kegiatan)
                @if($loop->first)
                <div class="carousel-item active" id>
                @else
                <div class="carousel-item" id="">
                @endif
                <div class="row " id>
                    <div class="container d-flex justify-content-center align-items-center" >
                        <img src="{{ url('/data_file/kegiatan/'.$kegiatan->file) }}" class="d-block w-50" alt="...">
                    </div>
                    <div class="container col d-flex justify-content-center align-items-center" id="wtext">
                        <p class="fs-5 fw-semibold text-primary">
                            {{ $kegiatan->nama_kegiatan }}
                        </p>
                        <p style="font-size:75% ">
                            {{ $kegiatan->deskripsi }}
                        </p>
                        <div id="wkontak">
                            <a href="https://g.page/pemandian-sumber-loo?share" id="wlink">
                                <img src="{{asset('assets/profil-desa/img/wisata/wloc.png')}}" class="wimg">{{"Lokasi UMKM"}}
                            </a>
                            <p id="wlink"> 
                                <img src="{{asset('assets/profil-desa/img/wisata/wtime.png')}}" alt="" class="wimg">{{ $kegiatan->jam_buka }} - {{ $kegiatan->jam_tutup }}
                            </p>
                            <p class="wlink">
                                <img src="{{asset('assets/profil-desa/img/wisata/wcontact.png')}}" alt="" id="wimg"><a href="https://wa.me/{{ $kegiatan->kontak }}">{{ $kegiatan->kontak }}</a>
                            </p>
                            </div>
                        </div>
                        
                    </div>
                </div>

                @endforeach
            </div>
    
            <button class="carousel-control-prev" type="button" data-bs-target="#kerousel-mobile" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#kerousel-mobile" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>