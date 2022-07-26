@extends('layouts.user')
@section('nav-about','lightcoral')
@section('content')
<!-- Hero Section Begin -->
<section class="hero-section set-bg about-us" data-setbg="{{ asset('cv-naesila/assets/4.jpeg') }}" style="background-attachment: fixed">
    <div class="container hero-text text-white">
        <h2>Tentang Kami</h2>
    </div>
</section>
<!-- Hero Section End -->
<!-- About Us Sectiion Begin -->
<section class="about-us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 about-text-warp">
                <div class="about-text">
                    <h2>Naesila Transportasi CV</h2>
                    <p>Melayani perjalanan anda dengan driver handal berpengalaman, ramah, rapi, bersih dan bertanggung jawab. Segera jadwalkan perjalanan anda bersama kami karena kepuasan anda kebanggaan kami .</p>
                    <a href="https://wa.me/{{ env('PHONE') }}?text=Saya mau tanya %0A{{ url('/') }}" target="_blank" class="site-btn a-btn">Hub Via WhatsApp</a>
                </div>
            </div>
            <div class="col-xl-6" style="background-color: #6F6F8A">
                <div class="slider-active owl-carousel tk">
                    <div class="items">
                        <img class="w-100" style="height: 800px" src="{{ asset('images/i1.jpeg') }}" alt="">
                    </div>
                    <div class="items">
                        <img class="w-100" style="height: 800px" src="{{ asset('images/i2.jpeg') }}" alt="">
                    </div>
                    <div class="items">
                        <img class="w-100" style="height: 800px" src="{{ asset('images/i3.jpeg') }}" alt="">
                    </div>
                    <div class="items">
                        <img class="w-100" style="height: 800px" src="{{ asset('images/i4.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Sectiion End -->
@endsection
