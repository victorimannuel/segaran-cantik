<html>
<head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    {{-- javascript --}}
    <script src="{{ asset('assets/profil-desa/scripts/carousel.js') }}" defer async></script>

    {{-- css  --}}
    <link rel="stylesheet" href="{{ asset('assets/profil-desa/styles/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/profil-desa/styles/carousel.css') }}" />


    <title>Home | Segaran</title>
</head>

<body>
<div class="container">
    <nav id="navbar">
        <ul >
            <li><a id="navmenu" href="#home">Beranda</a></li>
            <li><a  id="navmenu" href="#profile">Profil</a></li>
            <li><a  id="navmenu" href="#wisata">Potensi Wisata</a></li>
            <li><a id="navmenu" href="#umkm">Potensi UMKM</a> </li>
            <li><a  id="navmenu" href="#service">Layanan</a></li>
            <li><a  id="navmenu" href="#gallery">Galeri</a></li>
        </ul>
    </nav>
    <div id="home" class="content-container">
        <img src="{{ asset('assets/profil-desa/img/beranda/segaran.png') }}" alt="" style="width: 100%; height: 100%;">
    </div>

    <div id="profile" class="content-container">
       {{-- <img id="profildesa" src="{{ asset('assets/profil-desa/img/curang.png') }}" > --}}
       <img src="{{ asset('assets/profil-desa/img/profil/profile-img.png') }}" alt="" style="
        height: 80%;
       ">

       <div class="col">

            <div class="header">Malang</div>
            <div class="title">Desa Segaran</div>
            <p>Desa Segaran adalah desa yang tidak begitu ramai ,tetapi selalu mempunyai cerita unik di baliknya. Kebanyakan penduduk Desa Segaran adalah bercocok tanam. Tebu adalah hasil dari mereka bertani dan mereka juga sebagai pekerja penambang batu kapur, yang hasilnya banyak dikirim kepada pengolah batu kapur di daerah Druju, sumberejo dan di daerah Turen.</p>
            
            <div class="bottom-right">
            <div class="row" style="margin-bottom: 1em;">
                <span id="luas" style="
                    width: 10rem;
                    text-align: center;
                    border-bottom: 2px solid black;
                ">  ±11 km²</span>
                <span id="penduduk"
                style="
                    margin-left: 1rem;
                    display: flex;
                    align-items: center;
                ">
                    <img src="{{ asset('assets/profil-desa/img/profil/people-icon.png') }}" alt="" width="40"
                        style="margin-right: 0.5rem;"
                    >
                    ±10.100 Penduduk</span>
            </div>
            <div class="row" id="offset">
                <div class="col">
                    <img src="{{ asset('assets/profil-desa/img/profil/peta-segaran.png') }}" alt="" style="height: 20rem; z-index: 0;">
                </div>
                <div class="col">
    
                    <div id="jarak" class="img-container">
                        
                    <img src="{{ asset('assets/profil-desa/img/profil/location-icon.png') }}" alt="" width="50"
                    style="margin-right: 2rem;"
                >
                        1 Jam 12 Menit dari Kota Malang
                    </div>
        
                    <div id="dusun" class="img-container">
                        
                    <img src="{{ asset('assets/profil-desa/img/profil/houses-icon.png') }}" alt="" width="50"
                    style="margin-right: 2rem;"
                >
                        6 Dusun</div>
                    <div id="rt-rw" class="img-container">
                        
                    <img src="{{ asset('assets/profil-desa/img/profil/house-icon.png') }}" alt="" width="50"
                    style="margin-right: 2rem;"
                >
                        30 RT 9 RW</div>
                </div>
            </div>
            </div>
       </div>
    </div>  
    
    
    <div class="content-container">
        
    <img src="{{ asset('assets/profil-desa/img/wisata/wisata-header.png') }}" alt="" style="width: 100%;">
    </div>
    <div id="wisata" class="content-container">
        @include('profil.wisata')
    </div>

    <div id="humkm" class="content-container">
        <img src="{{ asset('assets/profil-desa/img/umkm/umkm-header.png') }}" alt="" style="width: 100%;">
    </div>
    <div id="umkm"  class="content-container">
        <div class="prow">
            <div class="pcolumn"></div>
            <div class="pcolumn" >
            </div>
        </div>
    </div>
    <div id="gsb" class="content-container">
        <img src="{{ asset('assets/profil-desa/img/lpd/lpd-header.png') }}" alt="" style="width: 100%;">
    </div>
    <div id="service">
        @include('profil.perangkat-desa')
    </div>
    <div id="gallery" class="content-container">

        <img src="{{ asset('assets/profil-desa/img/galeri/galeri-header.png') }}" alt="" style="width: 100%;">
    </div>
    <div id="gjustifier" class="content-container" style="height: auto;">
        <div id="gcontent">
            <div class="grow">
                <div class="gcolumn">
{{--                    <img class="gimg" id="gimg" src="assets/img/galeri/futsal.png" alt="futsal" onclick="openModal();currentSlide(1)" />--}}
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/futsal.png') }}" alt="futsal" onclick="openModal();currentSlide(1)" />
{{--                    <img class="gimg" id="gimg" src="assets/img/galeri/KKB.png" alt="kkb" onclick="openModal();currentSlide(2)" />--}}
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/KKB.png') }}" alt="kkb" onclick="openModal();currentSlide(2)" />
{{--                    <img class="gimg" id="gimg" src="assets/img/galeri/lahan.png" alt="lahan" onclick="openModal();currentSlide(3)" />--}}
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/lahan.png') }}" alt="lahan" onclick="openModal();currentSlide(3)" />
{{--                    <img class="gimg" id="gimg" src="assets/img/galeri/Posyandu.JPG" alt="mpls" onclick="openModal();currentSlide(14)" />--}}
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/Posyandu.JPG') }}" alt="mpls" onclick="openModal();currentSlide(14)" />
                </div>
                <div class="gcolumn">
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/mpls.png') }}" alt="mpls" onclick="openModal();currentSlide(4)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/poskamling.png') }}" alt="poskamling" onclick="openModal();currentSlide(5)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/ramah.png') }}" alt="ramah" onclick="openModal();currentSlide(6)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/senam.png') }}" alt="senam" onclick="openModal();currentSlide(8)" />
                </div>
                <div class="gcolumn">
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/salat.png') }}" alt="salat" onclick="openModal();currentSlide(7)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/senam.png') }}" alt="senam" onclick="openModal();currentSlide(8)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/Terapi.png') }}" alt="terapi" onclick="openModal();currentSlide(9)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/TKK.png') }}" alt="tkk" onclick="openModal();currentSlide(10)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/posyandus.png') }}" alt="posyandus" onclick="openModal();currentSlide(13)" />
                </div>
                <div class="gcolumn">
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/TPQ.png') }}" alt="tpq" onclick="openModal();currentSlide(11)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/vaksinasi.png') }}" alt="vaksin" onclick="openModal();currentSlide(12)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/suro.JPG') }}" alt="suro" onclick="openModal();currentSlide(15)" />
                    <img class="gimg" id="gimg" src="{{ asset('assets/profil-desa/img/galeri/TPQ.png') }}" alt="tpq" onclick="openModal();currentSlide(11)" />

                </div>
                <div id="myModal" class="modal">
                    <div class="overlay"  onclick="closeModal()"></div>
                    <!-- <span  class="close cursor button-close-modal" onclick="closeModal()">&times;</span> -->
                    <div class="modal-content">
                        <div class="mySlides">
                            <div class="numbertext">1 / 15</div>
                            <div class="content">
                                <img src="{{ asset('assets/profil-desa/img/galeri/futsal.png') }}" alt="" style="height: 200px" />
                                <br />
                                <p>Quote pertemanan</p>
                                <br />
                                <p id="gtx" style="margin-left: 40px; margin-right: 40px">“Apa yang kita alami demi teman terkadang melelahkan dan menjengkelkan, namun itulah yang membuat persahabatan memiliki nilai keindahan.”</p>
                            </div>
                            <div class="content">
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
                            <div class="numbertext">2 / 15</div>
                            <div class="content">
                                <img src="{{ asset('assets/profil-desa/img/galeri/KKB.png') }}" alt="" style="width: 400px; height: 300px; font-size: 10px" />
                            </div>
                            <div class="content">
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

                                <p id="gtx" style="font-size: 14px">Fakta Desa Segaran</p>
                                <p id="gtx" style="font-weight: lighter; font-size: 14px">Desa Segaran sedang melangsungkan kegiatan-kegiatan untuk mendukung prinsip Desa Cantik (Cinta Statistik).</p>
                            </div>
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">3 / 15</div>
                            <div class="content">
                                <img src="{{ asset('assets/profil-desa/img/galeri/lahan.png') }}" alt="" style="width: 400px; height: 400px" />
                            </div>
                            <div class="content">
                                <h3>Aktivitas Perawatan Lahan Pertanian</h3>
                                <p id="gtx">
                                    Desa Segaran terkenal dengan aktivitas bertaninya dengan macam-macam hasil pertaniannya, seperti tebu, bawang, jagung, dan masih banyak lagi.. Para petani cukup rajin merawat dan mengontrol tanamannya agar kualitas tetap
                                    terjaga ketika musim panen tiba.
                                </p>
                                <p id="gtx">
                                    Pada gambar tersebut, terdapat sejumlah petani yang giat merawat tanaman bawang di siang hari. Pada belakang petani, tampak tanaman tinggi seperti jagung. Mereka senantiasa memastikan bahwa hasil panen mereka dapat
                                    memuaskan pasar agar costumer relationship tetap terjaga.
                                </p>
                                <img src="{{ asset('assets/profil-desa/img/Hasil.png') }}" style="height: 75px; margin-left: -20px" alt="" />
                            </div>
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">4 / 15</div>
                            <div class="content">
                                <img src="{{ asset('assets/profil-desa/img/galeri/mpls.png') }}" alt="" style="width: 400px; height: 400px" />
                            </div>
                            <div class="content">
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
                            <div class="numbertext">5 / 15</div>
                            <div class="content">
                                <img src="{{ asset('assets/profil-desa/img/galeri/poskamling.png') }}" alt="" style="height: 400px" />
                            </div>
                            <div class="content">
                                <h3>Kegiatan Poskamling Dusun Krajen</h3>
                                <p id="gtx">
                                    Bagian dari kegiatan Desa Segaran yang sangat penting untuk menjaga keamanan di wilayah pedesaan ialah aktivitas poskamling atau ronda. Hal tersebut bertujuan agar warga merasa aman dan nyaman tinggal di desa karena
                                    sudah ada yang menjaga setiap malam.
                                </p>
                                <p id="gtx">
                                    Biasanya, warga laki-laki yang sudah dewasa atau paruh baya akan berkumpul bersama setiap malam di area poskamling dan berkeliling dusun secara bergilir sebagai bentuk untuk memastikan tidak ada bentuk kejahatan di malam
                                    hari di setiap dusunnya.
                                </p>
                                <img src="{{ asset('assets/profil-desa/img/Prinsip.png') }}" alt="" style="height: 100px" />
                            </div>
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">6 / 15</div>
                            <div class="content">
                                <img src="{{ asset('assets/profil-desa/img/galeri/ramah.png') }}" alt="" style="height: 400px" />
                            </div>
                            <div class="content">
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
                            <div class="numbertext">7 / 15</div>
                            <div class="content">
                                <img src="{{ asset('assets/profil-desa/img/galeri/salat.png') }}" alt="" />
                            </div>
                            <div class="content">
                                <h3>Salat Jum’at Dusun Krajen</h3>
                                <p id="gtx">
                                    Sudah menjadi kewajiban bagi umat muslim, terkhusus laki-laki untuk menunaikan salat Jum’at secara berjamaah. Warga laki-laki di Desa Segaran juga senantiasa saling mengajak berbondong-bondong untuk melakukan salat
                                    Jum’at di mesjid besar setiap dusunnya.
                                </p>
                                <p id="gtx">
                                    Gambar disamping menunjunkkan kegiatan pascasalat Jum’at di dusun Krajen yang ditutup dengan berdo’a bersama-sama. Seluruh spot masjid selalu terpenuhi dengan rapat. Hal tersebut menunjukkan bahwa seluruh warga sangat
                                    rajin melakukan kewajibannya sebagai umat muslim.
                                </p>
                                <img src="{{ asset('assets/profil-desa/img/timeline.png') }}" alt="" style="height: 75px" />
                            </div>
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">8 / 15</div>
                            <div class="content">
                                <img src="{{ asset('assets/profil-desa/img/galeri/senam.png') }}" alt="" />
                            </div>
                            <div class="content">
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
                            <div class="numbertext">9 / 15</div>
                            <div class="content">
                                <img src="{{ asset('assets/profil-desa/img/galeri/Terapi.png') }}" alt=""  style="height: 250px ;"/>
                                <p id="gtx" style="margin-left: 40px; margin-top:30px;">
                                    <b>Fakta Ling Tien Kung</b>
                                    <br>
                                    Beberapa gerakan dalam terapi tersebut cukup unik karena dinamai oleh hal-hal yang cukup asing, seperti membuka jendela langit dan belalang sembah.
                                </p>
                            </div>
                            <div class="content">
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
                            <div class="numbertext">10 / 15</div>
                            <div class="content">
                                <img src="{{ asset('assets/profil-desa/img/galeri/TKK.png') }}" alt="" style="height: 200px;"/>
                                <p id="gtx"  style="margin: 10px 40px 10px 40px;">“Miskonsepsi yang sering kita lihat adalah bahwa pendidikan untuk anak usia dini ini terlihat hanya untuk membaca, menulis, berhitung, calistung. Padahal ini berbeda sebenarnya dengan ilmu pendidikan anak usia dini yang harus lebih menguatkan aspek yang lebih integratif dan yang lebih melakukan bermain.”
                                    <br>
                                    <b style="text-align:right;">-Irwan Syahril, Dirjen GTK Kemendikbudristek-</b>
                                </p>
                            </div>
                            <div class="content">
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
                            <div class="numbertext">11 / 15</div>
                            <div class="content">
                                <img src="{{ asset('assets/profil-desa/img/galeri/TPQ.png') }}" alt="" style="height: 200px;"/>
                                <p id="gtx"  style="padding: 10px 40px 10px 40px;">
                                    “Rasulullah shallallahu ‘alaihi wasallam bersabda: <b> “Siapa yang membaca satu huruf dari Al Quran maka baginya satu kebaikan dengan bacaan tersebut, satu kebaikan dilipatkan menjadi 10 kebaikan.”</b>
                                </p>
                                <p id="gtx" style="width: 100%; text-align: center;">(H.R. Tirmidzi)</p>
                            </div>
                            <div class="content">
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
                            <div class="numbertext">12 / 15</div>
                            <div class="content">
                                <img src="{{ asset('assets/profil-desa/img/galeri/vaksinasi.png') }}" style="height: 400px;" alt="" />
                            </div>
                            <div class="content">
                                <h3>Vaksinasi Covid-19 Desa Segaran</h3>
                                <p id="gtx">Dalam rangka menjaga kesehatan warga, Desa Segaran telah melakukan beberapa kali vaksinasi Covid-19. Umumnya, proses vaksinasi dilakukan di kantor balai desa. Proses vaksinasi dilakukan secara sistematis dengan banyaknya tenaga medis yang membantu. Vaksinasi yang diberikan yaitu vaksin Covid-19 dosis pertama, kedua, dan vaksin <i> booster</i>.
                                    <br><br>
                                    Pada hari Senin, 25 Juli 2022, Desa Segaran melangsungkan vaksinasi kembali dengan dihadiri banyak warga di berbagai Dusun. Proses vaksinasi juga dilaksanakan bersamaan dengan program kampung KB yang membahas tentang urgensi data. Pada hari tersebut, terdapat juga mahasiswa Universitas Brawijaya yang sedang melakukan KKN di Desa Segaran dan ikut membantu proses administrasi vaksinasi dan mengamati acara program kampung KB.
                                <hr>
                                </p>
                                <img src="{{ asset('assets/profil-desa/img/time.png') }}" alt="" style="height: 60px;">
                            </div>
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">13 / 15</div>
                            <div class="content">
                                <img src="{{ asset('assets/profil-desa/img/galeri/posyandus.png') }}" alt="" style="height: 400px ;"/>
                            </div>
                            <div class="content">
                                <h3>Kegiatan Perkumpulan PKK</h3>
                                <p id="gtx">
                                    Setiap bulannya, wanita paruh baya di Desa Segaran berkumpul di balai Desa untuk membahas program-program kesejahteraan warga. Adapun cakupan kegiatan yang biasa dilakukan ialah kegiatan posyandu, menu sehat keluarga, program penyuluhan emansipasi, dan sebagainya.
                                    <br><br>
                                    Pada foto di samping, kegiatan PKK dilakukan pada hari Rabu, 27 Juli 2022 yang khusus membahas perencanaan Agustusan dan imunisasi anak nasional serentak satu Indonesia. Setiap dusunnya, mengirim perwakilan untuk mengikuti penyuluhan ini agar mendapat informasi yang sinergis dan terpusat dari desa. Adapun proses imunisasi anak nasional akan dilakukan secara serentak pada tanggal 2 Agustus 2022.
                                </p>
                            </div>
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">14 / 15</div>
                            <div class="content">
                                <img src="{{ asset('assets/profil-desa/img/galeri/Posyandu.JPG') }}" alt="" style="height: 400px ;"/>
                            </div>
                            <div class="content">
                                <h3>Kegiatan BIAN</h3>
                                <p id="gtx">
                                    Dalam rangka memperingati Bulan Imunisasi Anak Nasional (BIAN), Desa Segaran juga ikut mengadakan kegiatan imunisasi di posyandu. BIAN adalah upaya yang dicanangkan oleh Kementerian Kesehatan tahun 2022 untuk meningkatkan cakupan imunisasi rutin anak yang sempat menurun selama pandemi covid-19. BIAN sendiri merupakan kegiatan pemberian imunisasi tambahan Campak-Rubela dan pemberian imunisasi pada anak yang belum mendapatkan vaksin lengkap.
                                    <br><br>
                                    Kegiatan BIAN pada Desa Segaran dilaksanakan pada hari Selasa, 2 Agustus 2022. Imunisasi dilakukan pada masing-masing dusun (Krajan 1, Krajan 2, Putat, Sumberbanteng, Sumberkotes Kulon, Sumberkotes Wetan, Sumberjabon Wetan, Sumberjabon Kulon) pada tempat yang sudah disepakati untuk dijadikan posko kegiatan.
                                </p>
                            </div>
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">15 / 15</div>
                            <div class="content">
                                <img src="{{ asset('assets/profil-desa/img/galeri/suro.JPG') }}" alt="" style="height: 400px ;"/>
                            </div>
                            <div class="content">
                                <h3>Kegiatan Suroan</h3>
                                <p id="gtx">
                                    Suroan adalah tradisi turun menurun yang masih dilaksanakan masyarakat jawa sampai sekarang. Masyarakat Desa Segaran yang juga masih kental dengan budaya dan adat jawa juga selalu melaksanakan tradisi suroan untuk memperingati 1 Muharram atau yang lebih dikenal dengan 1 suro.  Tahun ini (2022), 1 suro jatuh pada tanggal 30 Juli 2022 dan Desa Segaran merayakan tradisi ini pada hari Senin, 2 Juli 2022. Suroan menitikberatkan pada ketentaman batin dan keselamatan. Ritual ini juga diselingi dengan pembacaan doa dari semua orang yang hadir denagn tujuan mendapatkan berkah dan menangkal marabahaya.                  <br><br>
                                    Pada foto di samping, kegiatan PKK dilakukan pada hari Rabu, 27 Juli 2022 yang khusus membahas perencanaan Agustusan dan imunisasi anak nasional serentak satu Indonesia. Setiap dusunnya, mengirim perwakilan untuk mengikuti penyuluhan ini agar mendapat informasi yang sinergis dan terpusat dari desa. Adapun proses imunisasi anak nasional akan dilakukan secara serentak pada tanggal 2 Agustus 2022.
                                </p>
                            </div>
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="width: 100%; height: 200px; background: white;"></div>
    <div id="footer" class="content-container">
        <div id="frow" style="
        border-bottom: 3px solid #EFF0F0;">
            <div id="fcolumn">

                <img src="{{ asset('assets/profil-desa/img/footer/LOGO.png') }}" alt="">
            </div>
            <div id="fcolumn" style="padding: 16px; border-right: 3px solid #EFF0F0">
                <p style="font-size: 14px;">Desa asri yang masih menjunjung tinggi nilai religius dan keberagaman, serta ramai akan potensi UMKM berkualitas.</p>
            </div>
            <div id="fcolumn" >
                <p> Kunjungi Kami

                </p>
                <p><a href="https://goo.gl/maps/AXS5d1cMQwkHVJ756"><img src="{{ asset('assets/profil-desa/img/footer/gmaps.png') }}" alt=""  style="height: 28px;" ></a>
                    <a href="https://www.youtube.com/channel/UC1PRdRh0HSqLhtOnGyCtmxg"><img src="{{ asset('assets/profil-desa/img/footer/iyoutube.png') }}" alt="" style="height: 24px;" ></a>
                    <a href="https://www.instagram.com/desa.segaran/"><img src="{{ asset('assets/profil-desa/img/footer/iinstagram.png') }}" alt=""  style="height: 28px;" ></a></p>



            </div>
            <div id="fcolumn" style="flex-direction: row;">
                <p>Developed By
                    <br>
                    <a href="https://www.instagram.com/kkn.segaran/"> <img src="{{ asset('assets/profil-desa/img/footer/Desain-Logo-KKN-28-Polos 1.png') }}" alt=""></a>
                    <a href="https://kkn-filkom.ub.ac.id/"><img src="{{ asset('assets/profil-desa/img/footer/image 7.png') }}" alt=""></a>
                </p>


            </div>
        </div>
        <div id="fcopyright">
            Copyright © 2022. Segaran Village. All rights reserved.
        </div>
    </div>
</div>

<script>

    if (
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
