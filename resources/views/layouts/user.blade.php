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
    <title>Rental mobil surabaya</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}" type="text/css">
    <link rel="shortcut icon" href="{{ asset('images/fav.png') }}" type="image/x-icon">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"><img src="{{ asset('images/logo-1.png') }}" alt=""></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid fixed-top" style="background: #30304e;">
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
    <!-- Header Section End -->

    @yield('content')

    <footer class="footer-section p-40">
        <div class="container">
            <div class="row p-37">
                <div class="col-lg-4">
                    <div class="about-footer">
                        <h5>Naesila Transport</h5>
                        <p>Melayani perjalanan anda dengan driver handal berpengalaman, ramah, rapi, bersih. Segera jadwalkan perjalanan anda bersama kami karena kepuasan anda kebanggaan kami.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="about-footer">
                        <h5>Kontak Saya</h5>
                        <a href="https://wa.me/6285851134222?text=Saya mau tanya %0A{{ url('/') }}" target="_blank" class="site-btn a-btn">Hub Via WhatsApp</a>
                        {{-- <div class="footer-social">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-address">
                        <h5>Lokasi</h5>
                        <ul>
                            <li><i class="flaticon-placeholder"></i><span>Jl. Pandugo Gg 2 no.07 Kec. Rungkut, Kota SBY, Jawa Timur</span>
                            </li>
                            {{-- <li><i class="flaticon-envelope"></i><span>naesila@email.com</span></li> --}}
                            <li><i class="flaticon-smartphone"></i><span>085851134222</span></li>
                        </ul>
                        <p>Senin - Minggu </p>
                        <p>00.00 - 24.59</p>
                    </div>
                </div>
            </div>

            <div class="row p-20">
                <div class="col-lg-12 text-center">
                    <div class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | CV.NAESILA Transportasi
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Js Plugins -->
    <script src="{{asset('user/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('user/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('user/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('user/js/main.js')}}"></script>
</body>

</html>
