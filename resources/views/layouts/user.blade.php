<!DOCTYPE html>
<html lang="en">

<head>
    <script data-ad-client="ca-pub-4799227766900844" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta charset="UTF-8">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Primary Meta Tags -->

    <meta name="title" content="CV.NAESILA Transport">
    <meta name="description" content="Melayani sewa segala macam mobil beserta drivernya, cocok untuk perjalanan wisata, acara wedding, instansi, ziarah wali dll.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="Rental mobil surabaya">
    <meta property="og:description" content="Melayani sewa segala macam mobil beserta drivernya, cocok untuk perjalanan wisata, acara wedding, instansi, ziarah wali dll.">
    <meta property="og:image" content="@yield('imgMeta')">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('/') }}">
    <meta property="twitter:title" content="Rental mobil surabaya">
    <meta property="twitter:description" content="Melayani sewa segala macam mobil beserta drivernya, cocok untuk perjalanan wisata, acara wedding, instansi, ziarah wali dll.">
    <meta property="twitter:image" content="@yield('imgMeta')">
    <meta name="description" content="CV Naesila adalah Tempat Sewa Mobil Di Surabaya yang mempertemukan antara kualitas kendaraan sewa dan ragam pelayanan yang prima dengan harga yang kompetitif">
    <title>Sewa Mobil Murah Surabaya | CV NAESILA - CARI JASA SEWA MOBIL SURABAYA BESERTA DRIVERNYA</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Css Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}" type="text/css"> --}}
    <link href="{{ asset('cv-naesila/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('cv-naesila/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}" type="text/css">
    <link rel="shortcut icon" href="{{ asset('images/fav.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        .nav-item{
            margin: 0 15px;
        }
        ul.main-menu li a{
            text-decoration: none;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"><img src="{{ asset('images/logo-1.png') }}" alt=""></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid fixed-top" style="background: #1154e6e8;">
            <div class="row mt-3 mb-2">
                <div class="col-lg-12">
                    <div class="logo ml-5">
                        <a href="{{ url('/') }}">
                            <h3 class="text-white">CV.NAESILA</h3>
                        </a>
                    </div>
                    <ul class="main-menu">
                        <li><a href="{{ url('/') }}" style="color: @yield('nav-home')">Home</a></li>
                        <li><a href="{{ url('daftar-mobil') }}" style="color: @yield('nav-mobil')">Daftar Mobil</a></li>
                        <li><a href="{{ url('artikel') }}" style="color: @yield('nav-mobil')">Artikel</a></li>
                        <li><a href="{{ url('tentang-kami') }}" style="color: @yield('nav-about')">Tentang Kami</a></li>
                        <li><a href="{{ url('kontak-kami') }}" style="color: @yield('nav-contact')">Kontak Kami</a></li>

                        <li class="top-social">
                        </li>
                    </ul>
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </div>
    </header>
    {{-- <nav class="navbar navbar-expand-md navbar-dark bg-primary" style="position:absolute; z-index: 5; width: 100%;" id="nav">
        <div class="container">
            <a class="navbar-brand" href="#"><b>CV. Naesila</b></a>
            <button class="navbar-toggler no_shadow no_border" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation" id="toggle">
                <i class="bi-filter-left fs-2 text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tentang_layanan">Tentang Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#profile_perusahaan">Profile Perusahaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#mengapa_kami">Mengapa Kami?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#layanan_kami">Layanan Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#daftar_mobil">Daftar Mobil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#hubungi_kami">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}
    <!-- Header Section End -->

    @yield('content')

    <div class="container-fluid p-0 bg-primary py-5 mt-5" id="hubungi_kami">
        <h3 class="bg-white text-primary p-2 ps-5 w-50" data-aos="fade-up" data-aos-duration="500"
            data-aos-easing="ease-in-out">Hubungi Kami!</h3>
        <div class="container"  data-aos="fade-up" data-aos-duration="500"
        data-aos-easing="ease-in-out">
            <div class="row row-cols-1 mt-3 text-white px-3 px-md-0">
                <div class="col mt-4">Jl.
                    Pandugo Gg 2 no.07 Kec. Rungkut, Kota SBY, Jawa Timur
                </div>
                <div class="col-12 mt-4">
                    <i class="bi bi-instagram me-2"></i> titonaesila_transport
                </div>
                <div class="col-12 mt-2">
                    <i class="bi bi-facebook me-2"></i> Naesila Transport
                </div>
                <div class="col-12 mt-2">
                    <i class="bi bi-globe me-2"></i> www.mobilsewasurabaya.com
                </div>
                <div class="col-12 mt-2">
                    <i class="bi bi-envelope-paper me-2"></i> naesilatransport29@gmail.com
                </div>
                <div class="col-12 mt-2">
                    <i class="bi bi-whatsapp me-2"></i> +62 812-3544-8344
                </div>
            </div>
        </div>
        </div>

    <!-- Js Plugins -->
    <script src="{{ asset('cv-naesila/js/bootstrap.js') }}"></script>
    <script src="{{ asset('cv-naesila/js/jquery.js') }}"></script>
    <script src="{{asset('user/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('user/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('user/js/main.js')}}"></script>
</body>

</html>
