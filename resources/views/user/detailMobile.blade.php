@extends('layouts.user')
@section('imgMeta',$data->image_path)
@section('content')
    <!-- Hero Section Begin -->
    <section class="hero-section set-bg single-property-r" data-setbg="{{ asset('user/img/2.jpg') }}" style="background-attachment: fixed">
        <div class="container hero-text text-white">
            <h2>Detail Mobil</h2>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Single Property Section Begin -->
    <div class="single-property">
        <div class="container">
            <div class="row spad-p">
                <div class="col-lg-12">
                    <div class="property-title">
                        <h3>{{ $data->nama }}</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="property-img owl-carousel">
                        <div class="single-img">
                            <img src="{{ $data->image_path }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Property End -->
    <!-- Single Property Deatails Section Begin -->
    <section class="property-details">
        <div class="container">
            <div class="row sp-40 spt-40">
                <div class="col-lg-8">
                    <div class="p-ins">
                        <div class="row details-top">
                            <div class="col-lg-12">
                                <div class="t-details">
                                    <div class="register-id">
                                        <p>Mobil: <span>{{ $data->nama }}</span></p>
                                    </div>
                                    <div class="popular-room-features single-property">
                                        <div class="size mt-3 mr-5">
                                            <h6>Harga Sewa</h6>
                                        </div>
                                        <div class="beds">
                                            <p>1 Hari</p>
                                            <span>Rp. {{ $data->harga_hari }}</span>
                                        </div>
                                        <div class="baths">
                                            <p>6 Jam</p>
                                            <span>Rp. {{ $data->harga_jam }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="property-description">
                                    <h4>Deskripsi</h4>
                                    <p>{{ $data->deskripsi }} </p>
                                </div>
                                <div class="property-features">
                                    <h4>Kelengkapan</h4>
                                    <div class="property-table">
                                        <table>
                                            <tr>
                                                @foreach ($data->Kelengkapan as $item)
                                                <td><img src="{{ asset('user/img/check.png') }}" alt=""> {{ $item->nama }}</td>
                                                @endforeach
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row pb-30">
                        <div class="col-lg-12">
                            <div class="contact-service">
                                <img src="{{ asset('images/logo-1.png') }}" alt="">
                                <p>Owner</p>
                                <h5>Titto Ferimadjanto</h5>
                                <table>
                                    <tr>
                                        <td>WhatsApp : <span>085851134222</span></td>
                                    </tr>
                                    {{-- <tr>
                                        <td>Email : <span>spydercode01@gmail.com</span></td>
                                    </tr> --}}
                                </table>
                                <a href="https://wa.me/6285851134222?text=Saya mau tanya tentang mobil {{$data->nama}}%0A{{ url('mobil/'.$data->id) }}" target="_blank" class="site-btn list-btn">Sewa Mobil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Single Property Deatails Section End -->
@endsection
