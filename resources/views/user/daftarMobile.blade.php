@extends('layouts.user')
@section('nav-mobil','lightcoral')
@section('content')
        <!-- Hero Section Begin -->
        <section class="hero-section set-bg search-result" data-setbg="{{ asset('user/img/2.jpg') }}" style="background-attachment: fixed">
            <div class="container hero-text text-white">
                <h2>Daftar Mobil</h2>
            </div>
        </section>
        <!-- Hero Section End -->

        <!-- Hotel Room Section Begin -->
        <section class="hotel-rooms spad-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 p-45">
                        <div class="found-items">
                            <h4>Jumlah <span>{{ $data->count() }}</span> unit</h4>
                            {{-- <select class="date-select">
                                <option value="0">Mobil mewah</option>
                                <option value="1">Mini bus</option>
                                <option value="2">Mobil keluarga</option>
                            </select> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($data as $item)
                    <div class="col-lg-4 col-md-4 col-md-6">
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
                                    <a href="https://wa.me/{{ env('PHONE') }}?text=Saya mau tanya tentang mobil {{$item->nama}}%0A{{ url('mobil/'.$item->id) }}" target="_blank" class="site-btn btn-line">WhatsApp</a>
                                </div>
                                <a href="{{ url('mobil/'.$item->nama) }}" class="site-btn btn-line">Detail Mobil</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
@endsection
