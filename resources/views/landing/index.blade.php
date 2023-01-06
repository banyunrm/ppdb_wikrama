@extends('layout')

@section('content')

{{-- Ini Hero Section
<section id="hero">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-md-6">
                <h1>PPDB TP 2023-2024
                    SMK Wikrama Bogor</h1>
                <p>Ayo! segera daftarkan dirimu ke SMK Wikrama dengan cara klik <span class="fw-bold">DAFTAR</span> dibawah ini!
                    <span class="fw-bold">Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah.</span>
                </p>
                <a class="btn btn-primary" type="submit" href="{{ route('daftar') }}" style="width: 100px"> DAFTAR</a>
            </div>
        </div>
    </div>--}}
    <section id="beranda" class="" style="padding-top:250px" >
        <div class="container d-flex flex-column align-items-start" >
            <h1>PPDB TP 2023-2024</h1>   
            <h1>SMK Wikrama Bogor</h1>
            <h5 class="mt-3">Ayo! segera daftarkan dirimu ke SMK Wikrama dengan cara klik PENDAFTARAN PPDB dibawah ini! <br>
                Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.</h5>

            <a href="{{ route('daftar')}}" class="btn btn-warning mt-5" >Daftar</a>
        </div>
    </section>
    

    {{-- Card Untuk Motto dll. --}}
    <div class="card text-center" style="width: 85%">
        <div class="card-body d-flex justify-content-end" style="margin-right: 5%">
            <span class="text-dark"><b> MOTTO</b> <br>
                <p>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
            </span>
            <span class="text-dark"><b> AFIRMASI</b> <br>
                <p>Padamu negeri - kami berjanji - lulus
                    Wikrama siap membangun negeri</p>
            </span>
            <span class="text-dark"><b> ATTITUDE</b><br>
                <p>Aku ada lingkunganku bahagia</p>
            </span>
        </div>
    </div>
</section> 

{{-- Jurusan --}}
<section id="jurusan">
    <div class="containerr">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Jurusan</h2>
                <span class="sub-title">SMK Wikrama menjadi solusi bagi kamu</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center d-flex justify-content-between">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card-jurusan shadow" style="background-image: url('/img/rpl.jpg')">
                                <div class="card-body" style="margin-top:50px">
                                    <h4 class="card-title text-primary fw-bold">PPLG</h4>
                                    <h5 class="text-light">Pengembangan Perangkat Lunak dan Gim</h5>
                                    <p class="card-text text-light">Dekstop Programming, Web Programming, Mobile
                                        Programming,
                                        Bussiness
                                        Analyst, Database Administration</p>
                                    <a href="#" class="btn btn-primary" style="width: 130px">Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-jurusan shadow" style="background-image: url('/img/tjkt.jpg')">
                                <div class="card-body" style="margin-top:50px">
                                    <h4 class="card-title text-primary fw-bold">TJKT</h4>
                                    <h5 class="text-light">Teknik Jaringan Komputer dan Telekomunikasi</h5>
                                    <p class="card-text text-light">Dekstop Programming, Web Programming, Mobile
                                        Programming,
                                        Bussiness
                                        Analyst, Database Administration</p>
                                    <a href="#" class="btn btn-primary" style="width: 130px">Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-jurusan shadow" style="background-image: url('/img/dkv.jpg')">
                                <div class="card-body" style="margin-top:50px">
                                    <h4 class="card-title text-primary fw-bold">DKV</h4>
                                    <h5 class="text-light">Design Komunikasi Visual</h5>
                                    <p class="card-text text-light">Dekstop Programming, Web Programming, Mobile
                                        Programming,
                                        Bussiness
                                        Analyst, Database Administration</p>
                                    <a href="#" class="btn btn-primary" style="width: 130px">Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-jurusan shadow" style="background-image: url('/img/pmn.jpg')">
                                <div class="card-body" style="margin-top:50px">
                                    <h4 class="card-title text-primary fw-bold">PMN</h4>
                                    <h5 class="text-light">Pemasaran</h5>
                                    <p class="card-text text-light">Dekstop Programming, Web Programming, Mobile
                                        Programming,
                                        Bussiness
                                        Analyst, Database Administration</p>
                                    <a href="#" class="btn btn-primary" style="width: 130px">Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-jurusan shadow" style="background-image: url('/img/mplb-ya.JPG')">
                                <div class="card-body" style="margin-top:50px">
                                    <h4 class="card-title text-primary fw-bold">MPLB</h4>
                                    <h5 class="text-light">Manajemen Perkantoran Lembaga Bisnis</h5>
                                    <p class="card-text text-light">Dekstop Programming, Web Programming, Mobile
                                        Programming,
                                        Bussiness
                                        Analyst, Database Administration</p>
                                    <a href="#" class="btn btn-primary" style="width: 130px">Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-jurusan shadow" style="background-image: url('/img/lab_kuliner.jpg')">
                                <div class="card-body" style="margin-top:50px">
                                    <h4 class="card-title text-primary fw-bold">KLN</h4>
                                    <h5 class="text-light">Kuliner</h5>
                                    <p class="card-text text-light">Dekstop Programming, Web Programming, Mobile
                                        Programming,
                                        Bussiness
                                        Analyst, Database Administration</p>
                                    <a href="#" class="btn btn-primary" style="width: 130px">Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-jurusan shadow" style="background-image: url('/img/lab_hotel.jpg')">
                                <div class="card-body" style="margin-top: 50px">
                                    <h4 class="card-title fw-bold text-primary">HTL</h4>
                                    <h5 class="text-light">Hotel</h5>
                                    <p class="card-text text-light">Dekstop Programming, Web Programming, Mobile
                                        Programming,
                                        Bussiness
                                        Analyst, Database Administration</p>
                                    <a href="#" class="btn btn-primary" style="width: 130px">Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>

{{-- Hubungi kami --}}
<section class="contact">
    <div class="content py-3 pb-5">
        <h2 class="fw-bold">Tentang Kami</h2>
        <p class="mt-2">
            SMK Wikrama Bogor didirikan oleh Ir. Itasia Dina Sulvianti dan Dr.H.RP Agus Lelana dibawah naungan Yayasan
            Prawitama pada tahun 1996 di bekas gudang KUD. Kompetensi keahlian yang pertama dibuka pada saat itu adalah
            sekretaris dengan jumlah hanya 34 siswa.
            Seiring berjalannya waktu, jumlah siswa SMK Wikrama Bogor setiap tahunnya terus bertambah. Sehingga pada
            tahun 2001, secara bertahap SMK Wikrama Bogor menempati gedung yang lebih luas diatas tanah ± 5000m2,
            berlokasi di Jalan Raya Wangun Kelurahan Sindangsari Kota Bogor. Hingga saat ini, SMK Wikrama Bogor memiliki
            1596 siswa dengan 51 guru pendidik.
            Kesuksesan SMK Wikrama Bogor saat ini tentunya tidak lepas dari sejarah SMK Wikrama Bogor mulai dari
            membentuk visi dan misi, kerja keras hingga diakui dunia internasional hingga prestasi dan pengharagaan yang
            didapatkan SMK Wikrama Bogor sejak awal didirikan. Berikut sejarah yang dilalui SMK Wikrama Bogor
            berdasarkan urutan tahun.
        </p>
    </div>
    <div class="container m-0">
        <div class="contactInfo">
            <div class="box">
                <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                <div class="text">
                    <h3>Address</h3>
                    <p>Jl. Raya Wangun No.21, RT.01/RW.06, Sindangsari,<br> Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146
                        prohumasi@smkwikrama.net</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa-solid fa-phone"></i></div>
                <div class="text">
                    <h3>Phone</h3>
                    <p>0251-8242411</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                <div class="text">
                    <h3>Email</h3>
                    <p>smkwikrama.sch.id</p>
                </div>
            </div>
        </div>
        <div class="contactForm">
            <form action="">
                <h2>Send Message</h2>
                <div class="inputBox">
                    <input type="text" name="" required="required">
                    <span>Full Name</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="" required="required">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <textarea name="" id="" required="required"></textarea>
                    <span>Type your Message</span>
                </div>
                <div class="inputBox">
                    <input type="submit" name="" value="Send">
                </div>
            </form>
        </div>
    </div>
{{-- </section>

<section id="footer" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-4 d-flex flex-column align-items-center">
                <h3>SMK WIKRAMA BOGOR</h3>
                <img src="{{ asset('img/logo-wk.png') }}" alt="" class="w-50">
            </div>
            <div class="col-4 d-flex flex-column align-items-center">
                <h3>Tautan</h3>
                <a href="" class="text-dark mt-2 text-decoration-none">Beranda</a>
                <a href="" class="text-dark mt-2 text-decoration-none">Jurusan</a>
                <a href="" class="text-dark mt-2 text-decoration-none">Tentang Kami</a>
                <a href="" class="text-dark mt-2 text-decoration-none">Login</a>
            </div>
            <div class="col-4 d-flex flex-column align-items-start">
                <h3>Tautan</h3>
                <h4>0251-8242411</h4>
                <h4 class="mt-2">
                    Alamat
                    Jl. Raya Wangun
                    Kelurahan Sindangsari
                    Bogor Timur 16720
                </h4>
            </div>
        </div>
    </div>
</section> --}}

@endsection