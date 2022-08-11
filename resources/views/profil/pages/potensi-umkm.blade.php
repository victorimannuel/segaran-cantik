<div class="desktop">

    <div id="urousel" class="desktop carousel slide carousel-dark slide d-flex justify-content-center align-items-center" data-bs-ride="carousel">
        <div class="carousel-inner" id="">
            @foreach ($usahas as $usaha)
            @if($loop->first)
            <div class="carousel-item active" id="warousel">
            @else
            <div class="carousel-item" id="warousel">
            @endif
                <div class="row warousel-row m-auto">
                    <div class="col d-flex flex-column justify-content-center align-items-center" class="wtext">
                        <p class="fs-2 fw-semibold text-primary">
                            {{ $usaha->nama_usaha }}
                        </p>
                        <p class="fs-5">
                            {{ $usaha->deskripsi }}
                        </p>
                        <div class="wkontak">
                            <div class="wlink">
                                <img src="{{asset('assets/profil-desa/img/wisata/wloc.png')}}" class="wimg"> RT {{ $usaha->rt }}
                            </div>
                            <div class="wlink">
                                <img src="{{asset('assets/profil-desa/img/wisata/wloc.png')}}" class="wimg"> RW {{ $usaha->rw }}
                            </div>
                            {{-- <div class="wlink">

                                <a href="https://g.page/pemandian-sumber-loo?share" class="wlink">
                                    <img src="{{asset('assets/profil-desa/img/wisata/wloc.png')}}" class="wimg">{{"Lokasi UMKM"}}
                                </a>
                            </div> --}}
                            <div class="wlink"> 
                                <img src="{{asset('assets/profil-desa/img/wisata/wtime.png')}}" alt="" class="wimg">{{ $usaha->jam_buka }} - {{ $usaha->jam_tutup }}
                            </div>
                            <div class="wlink">
                                <a href="https://wa.me/{{ $usaha->kontak }}">
                                <img src="{{asset('assets/profil-desa/img/wisata/wcontact.png')}}" alt="" id="wimg">{{ $usaha->kontak }}</a>
                                </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        <img class="wisata-img" src="{{ url('/data_file/usaha/'.$usaha->file) }}" class="d-block w-50" alt="...">
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

<div class="mobile-mode">
    <div id="urousel-mobile" class="carousel slide carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner" id>
    
                @foreach ($usahas as $usaha)
                @if($loop->first)
                <div class="carousel-item active" id>
                @else
                <div class="carousel-item" id="">
                @endif
                <div class="row " id>
                    <div class="container d-flex justify-content-center align-items-center" >
                        <img src="{{ url('/data_file/usaha/'.$usaha->file) }}" class="d-block w-50" alt="...">
                    </div>
                    <div class="container col d-flex justify-content-center align-items-center" id="wtext">
                        <p class="fs-5 fw-semibold text-primary">
                            {{ $usaha->nama_usaha }}
                        </p>
                        <p style="font-size:75% ">
                            {{ $usaha->deskripsi }}
                        </p>
                        <div id="wkontak">
                            <div class="wlink">
                                <a href="https://g.page/pemandian-sumber-loo?share" id="wlink">
                                    <img src="{{asset('assets/profil-desa/img/wisata/wloc.png')}}" class="wimg"> RT {{ $usaha->rt }}
                                </a>
                            </div>
                            <div class="wlink">
                                <a href="https://g.page/pemandian-sumber-loo?share" id="wlink">
                                    <img src="{{asset('assets/profil-desa/img/wisata/wloc.png')}}" class="wimg">RW {{ $usaha->rw }}
                                </a>
                            </div>
                            <p class="wlink"> 
                                <img src="{{asset('assets/profil-desa/img/wisata/wtime.png')}}" alt="" class="wimg">{{ $usaha->jam_buka }} - {{ $usaha->jam_tutup }}
                            </p>
                            <p class="wlink">
                                <img src="{{asset('assets/profil-desa/img/wisata/wcontact.png')}}" alt="" id="wimg"><a href="https://wa.me/{{ $usaha->kontak }}">{{ $usaha->kontak }}</a>
                            </p>
                            </div>
                        </div>
                        
                    </div>
                    @endforeach
                </div>
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