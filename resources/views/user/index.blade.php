@extends('layouts.user')
@section('imgMeta', asset('images/logo-1.png'))
@section('nav-home','lightcoral')
@section('content')
    <!-- Hero Section Begin -->
    <section class="hero-section home-page set-bg" data-setbg="">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 ban-1" alt="First slide">
                    <div class="container hero-text text-white">
                        <h2>Rental Mobil Surabaya</h2>
                        <h1>Naesila Transport CV</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 ban-2" alt="First slide">
                    <div class="container hero-text text-white">
                        <h2 class="mt-5">DRIVER BERPENGALAMAN</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 ban-3" alt="First slide">
                    <div class="container hero-text text-white">
                        <h2>RAMAH, AMANAH</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 ban-4" alt="First slide">
                    <div class="container hero-text text-white">
                        <h2>BERSIH, SOPAN</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 ban-5" alt="First slide">
                    <div class="container hero-text text-white">
                        <h2>BERTANGGUNG JAWAB</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="height: 535px; background-image:url({{ asset('images/ban-1.jpg') }});background-color:rgba(18, 16, 82, 0.75);background-blend-mode:darken;  background-repeat: no-repeat;
                    background-size: 100% 100%;" src="" alt="Second slide">
                    <div class="container hero-text text-white">
                        <h2 class="mt-5">MENEMANI PERJALANAN</h2>
                        {{-- <h1>CV.Naesila Transport</h1> --}}
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="height: 535px; background-image:url({{ asset('images/ban-3.jpg') }});background-color:rgba(18, 16, 82, 0.75);background-blend-mode:darken;  background-repeat: no-repeat;
                    background-size: 100% 100%;" src="" alt="Third slide">
                    <div class="container hero-text text-white">
                        <h2 class="mt-5">WISATA, INSTANSI</h2>
                        {{-- <h1>CV.Naesila Transport</h1> --}}
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="height: 535px; background-image:url({{ asset('images/ban-2.jpg') }});background-color:rgba(18, 16, 82, 0.75);background-blend-mode:darken;  background-repeat: no-repeat;
                    background-size: 100% 100%;" alt="Third slide">
                    <div class="container hero-text text-white">
                        <h2 class="mt-5">ANTAR ATAU LUAR KOTA</h2>
                        {{-- <h1>CV.Naesila Transport</h1> --}}
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="height: 535px; background-image:url({{ asset('images/ban-5.jpg') }});background-color:rgba(18, 16, 82, 0.75);background-blend-mode:darken;  background-repeat: no-repeat;
                    background-size: 100% 100%;" src="" alt="Third slide">
                    <div class="container hero-text text-white">
                        <h2 class="mt-5">ZIARAH DAN KENEGARAAN</h2>
                        {{-- <h1>CV.Naesila Transport</h1> --}}
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="height: 535px; background-image:url({{ asset('images/ban-4.jpeg') }});background-color:rgba(18, 16, 82, 0.75);background-blend-mode:darken;  background-repeat: no-repeat;
                    background-size: 100% 100%;" src="" alt="Third slide">
                    <div class="container hero-text text-white">
                        <h2 class="mt-5">KAPAN PUN SIAP MELAYANI</h2>
                        {{-- <h1>CV.Naesila Transport</h1> --}}
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Hotel Room Section Begin -->
    <section class="hotel-rooms spad">
        <div class="container">
            <div class="row">
                @foreach ($data as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="room-items">
                        <div class="room-img set-bg" data-setbg="{{ $item->image_path }}">
                            <a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5>{{ $item->nama }}</h5>
                                </div>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <div class="size mt-3">
                                        <h6>Sewa</h6>
                                    </div>
                                    <div class="beds">
                                        <p>1 Hari</p>
                                        <span>Rp. {{ $item->harga_hari }}</span>
                                    </div>
                                    <div class="baths">
                                        <p>6 Jam</p>
                                        <span>Rp. {{ $item->harga_jam }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="room-price">
                                <a href="https://wa.me/{{ env('PHONE') }}?text=Saya mau tanya tentang mobil {{$item->nama}}%0A{{ url('mobil/'.$item->id) }}" class="site-btn btn-line" target="_blank">WhatsApp</a>
                            </div>
                            <a href="{{ url('mobil/'.$item->nama) }}" class="site-btn btn-line">Detail Mobil</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Hotel Room Section End -->
    <!-- Popular Room Section Begin -->
    <section class="popular-room set-bg p-in" data-setbg="{{ asset('user/img/1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="slider-active owl-carousel">
                        @foreach ($data as $item)
                        <div class="popular-items">
                            <div class="popular-room-text">
                                <div class="popular-room-details">
                                    <div class="popular-room-title">
                                        <h5>{{ $item->nama }}</h5>
                                    </div>
                                </div>
                                <div class="popular-room-description">
                                    <div class="popular-room-desc">
                                        <p>{{ $item->deskripsi }}</p>
                                    </div>
                                </div>
                                <div class="popular-room-features">
                                    <div class="popular-room-info">
                                        <div class="size mt-3">
                                            <h6>Harga Sewa</h6>
                                        </div>
                                        <div class="beds ml-5">
                                            <p>1 Hari</p>
                                            <span>Rp. {{ $item->harga_hari }}</span>
                                        </div>
                                        <div class="baths">
                                            <p>6 Jam</p>
                                            <span>Rp. {{ $item->harga_jam }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="popular-room-price">
                                    <a href="https://wa.me/{{ env('PHONE') }}?text=Saya mau tanya tentang mobil {{$item->nama}}%0A{{ url('mobil/'.$item->id) }}" target="_blank" class="site-btn btn-line">WhatsApp</a>
                                </div>
                                <a href="{{ url('mobil/'.$item->nama) }}" class="site-btn btn-line">Detail Mobil</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Room Section End -->

    <!-- Servies Section Begin -->
    <section class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-side">
                        <h2><span>NAESILA Transport CV</span></h2>
                        <p>Melayani perjalanan anda dengan driver handal berpengalaman, ramah, rapi, bersih. Segera jadwalkan perjalanan anda bersama kami karena kepuasan anda kebanggaan kami. </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-side">
                        <ul>
                            <li><img src="{{ asset('user/img/check.png') }}" alt="">Menyewakan mobil beserta driver.</li>
                            <li><img src="{{ asset('user/img/check.png') }}" alt="">Menyediakan unit terbaru untuk perjalanan wisata.</li>
                            <li><img src="{{ asset('user/img/check.png') }}" alt="">Memiliki segala jenis unit yang siap jalan.</li>
                            <li><img src="{{ asset('user/img/check.png') }}" alt="">Melayani untuk wedding, instansi, ziarah wali, kenegaraan dll.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Servies Section End -->
    <!-- Footer Section Begin -->
    <div class="room-pic">
        <div class="container-fluid">
            <div class="row sp-40">
                <img src="{{ asset('images/1.jpeg')}}" alt="">
                <img src="{{ asset('images/2.jpeg')}}" alt="">
                <img src="{{ asset('images/3.jpeg')}}" alt="">
                <img src="{{ asset('images/5.jpeg')}}" alt="">
                <img src="{{ asset('images/4.jpeg')}}" alt="">
            </div>
        </div>
    </div>
@endsection
