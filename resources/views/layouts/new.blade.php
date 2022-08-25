<!doctype html>
<html lang="id">

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
    <link href="{{ asset('cv-naesila/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('cv-naesila/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('cv-naesila/css/aos.css') }}">
    @stack('styles')
    <title>CV. Naesila Transport | Company Profile</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark" style="position:absolute; z-index: 5; width: 100%;" id="nav">
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
                        <a class="nav-link active" href="{{ url('daftar-mobil') }}">Daftar Mobil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('artikel') }}">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('kontak-kami') }}">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container-fluid p-0 pt-2 pb-5 overflow-hidden" style="position: relative;">
        <img class="jumbo_img d-none d-md-block" src="{{ asset('cv-naesila/assets/1.jpeg') }}" alt="jumbotron">
        <img class="jumbo_img d-md-none" src="{{ asset('cv-naesila/assets/5.jpeg') }}" alt="jumbotron">
        <br>
        <br>
        <br>
        <div class="container text-white">
            <h1 class="fw-bold fs-1">CV. Naesila
                Transport</h1>
            <h2>Company Profile
            </h2>

            <h5 class="mt-5 bg-primary p-2">Member of CV. Naesila Transport</h5>
            <ul class="p-0 mt-3 mb-5" style="list-style: none;">
                <li class="mb-2">
                    <i class="bi bi-instagram me-2"></i> titonaesila_transport
                </li>
                <li class="mb-2">
                    <i class="bi bi-facebook me-2"></i> Naesila Transport
                </li>
                <li class="mb-2">
                    <i class="bi bi-globe me-2"></i> www.mobilsewasurabaya.com
                </li>
                <li class="mb-2">
                    <i class="bi bi-envelope-paper me-2"></i> naesilatransport29@gmail.com
                </li>
                <li class="mb-2">
                    <i class="bi bi-whatsapp me-2"></i> +62 812-3544-8344
                </li>
            </ul>
        </div>
    </div>

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
                <div class="col mt-4">
                    <i class="bi bi-instagram me-2"></i> titonaesila_transport
                </div>
                <div class="col mt-2">
                    <i class="bi bi-facebook me-2"></i> Naesila Transport
                </div>
                <div class="col mt-2">
                    <i class="bi bi-globe me-2"></i> www.mobilsewasurabaya.com
                </div>
                <div class="col mt-2">
                    <i class="bi bi-envelope-paper me-2"></i> naesilatransport29@gmail.com
                </div>
                <div class="col mt-2">
                    <i class="bi bi-whatsapp me-2"></i> +62 812-3544-8344
                </div>
            </div>
        </div>
        </div>

    <script src="{{ asset('cv-naesila/js/bootstrap.js') }}"></script>
    <script src="{{ asset('cv-naesila/js/jquery.js') }}"></script>
    <script src="{{ asset('cv-naesila/js/aos.js') }}"></script>
    <script>
        AOS.init();
        $('#toggle').on('click', function () {
            if ($("#nav").css("background-color") != 'rgb(13, 110, 253)') {
                $("#nav").css("background-color", "rgb(13, 110, 253)");
            } else {
                $("#nav").css("background-color", "rgba(0, 0, 0, 0)");
            }
        });
    </script>
    @stack('scripts')
</body>

</html>
