@extends('layouts.user')
@section('nav-contact','lightcoral')
@section('content')
    <!-- Hero Section Begin -->
    <section class="hero-section set-bg about-us" data-setbg="{{ asset('user/img/3.jpg') }}" style="background-attachment: fixed">
        <div class="container hero-text text-white">
            <h2>Contact</h2>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form">
                        @if ($message = Session::get('success'))
                            <div class="row">
                                <div class="col mt-3">
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <h4>Kritik Atau Saran</h4>
                        <form action="{{ url('addPesan') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" class="name" name="nama" placeholder="Nama" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" placeholder="Email" name="email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Subjek" name="subjek" required>
                                    <textarea placeholder="Isi pesan" required name="pesan"></textarea>
                                    <button class="site-btn c-btn">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h4>Contact Details</h4>
                        <ul class="contact-addr">
                            <li><i class="flaticon-placeholder"></i><span>Jl. Pandugo Gg 2 no.07 Kec. Rungkut, Kota SBY, Jawa Timur</span>
                            </li>
                            {{-- <li><i class="flaticon-envelope"></i><span>hello@home.com</span></li> --}}
                            <li><i class="flaticon-smartphone"></i><span>085851134222</span></li>
                        </ul>
                        <p>Senin - Minggu </p>
                        <p>00.00 - 24.59</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
