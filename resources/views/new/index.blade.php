@extends('layouts.new')
@push('styles')
    <style>
        span{
            line-height: 30px;
        }
    </style>
@endpush
@section('content')
<div class="container-fluid text-center p-5" style="background-color: #f7f7f7;" id="tentang_layanan"
data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
<h3 class="text-primary">Layanan Yang Kami Berikan</h3>
<p>
    Kami menyediakan layanan berbagai kendaraan transportasi
    untuk berbagai kepentingan apapun, dimulai penyewaan
    berjangka harian, mingguan, bahkan bulanan
</p>
</div>

<div class="container-fluid py-4">
<div class="container">
    <div class="row row-cols-1 row-cols-md-4 m-0 text-center">
        <div class="col p-3">
            <div class="rounded p-3 resp-shadow hover-up" data-aos="fade-up" data-aos-duration="500"
                data-aos-easing="ease-in-out">
                <img width="50" src="{{ asset('cv-naesila/assets/drive-icon.svg') }}" alt="icon">
                <br>
                <span class="mt-2 d-block">
                    Menyewakan mobil beserta driver
                </span>
            </div>
        </div>
        <div class="col p-3">
            <div class="rounded p-3 resp-shadow hover-up" data-aos="fade-up" data-aos-duration="500"
                data-aos-easing="ease-in-out">
                <img width="50" src="{{ asset('cv-naesila/assets/drive-icon.svg') }}" alt="icon">
                <br>
                <span class="mt-2 d-block">
                    Menyediakan unit terbaru untuk semua
                    perjalanan.
                </span>
            </div>
        </div>
        <div class="col p-3">
            <div class="rounded p-3 resp-shadow hover-up" data-aos="fade-up" data-aos-duration="500"
                data-aos-easing="ease-in-out">
                <img width="50" src="{{ asset('cv-naesila/assets/drive-icon.svg') }}" alt="icon">
                <br>
                <span class="mt-2 d-block">
                    Memiliki segala jenis unit yang siap jalan.
                </span>
            </div>
        </div>
        <div class="col p-3">
            <div class="rounded p-3 resp-shadow hover-up" data-aos="fade-up" data-aos-duration="500"
                data-aos-easing="ease-in-out">
                <img width="50" src="{{ asset('cv-naesila/assets/drive-icon.svg') }}" alt="icon">
                <br>
                <span class="mt-2 d-block">
                    Melayani untuk wedding, instansi, ziarah wali,
                    kenegaraan dll.
                </span>
            </div>
        </div>
    </div>
</div>

</div>


<div class="profile_perusahaan container ps-md-4 mt-5" id="profile_perusahaan">
<h3 class="text-primary w-100 text-center text-md-start" data-aos="fade-up" data-aos-duration="500"
    data-aos-easing="ease-in-out">Profile Perusahaan</h3>
<div class="row px-3 px-md-0 mt-3">
    <div class="col-12 col-md-8" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
        <span>
            CV. Naesila Transport adalah perusahaan penyedia jasa
            sewa kendaraan untuk korporasi, wedding, instansi,
            ziarah wali, kenegaraan dll. Menemani perjalanan anda
            dengan driver handal berpengalaman, ramah, rapi,
            bersih dan terbaik.
        </span>
        <span class="d-block mt-2">
            Selama lebih dari 16 tahun,
            Naesika Transport telah
            melayani lebih dari 600
            pelanggan dari berbagai
            industri, mulai dari perbankan,
            manufaktur, otomotif, farmasi,
            dll, baik berskala kecil maupun
            besar secara nasional.
            Sebagai pionir dalam
            pelayanan manajemen armada,
            Naesila Transport telah banyak
            membantu pelanggan untuk
            mencapai titik optimal dengan
            menjaga Standard Level
            Agreement (SLA) ketersediaan
            unit, serta telah membantu
            banyak perusahaan dalam
            meningkatkan efisiensi
            penggunaan kendaraan dan
            mengurangi biaya operasional
        </span>
    </div>
    <div class="col-12 col-md-4 mt-3 mt-md-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
        <img class="rounded shadow-sm" style="width: 100%;" src="{{ asset('cv-naesila/assets/4.jpeg') }}" alt="business profile">
    </div>
</div>
</div>


<div class="container-fluid p-0 py-5 mt-5 overflow-hidden" style="background-color: #f7f7f7; position:relative"
id="mengapa_kami">
<div class="container">
    <h3 class="text-primary w-100 text-center text-md-start" data-aos="fade-up" data-aos-duration="500"
        data-aos-easing="ease-in-out">Mengapa Kami?</h3>
    <div class="row mt-3 mt-md-5 px-3 px-md-0">
        <div class="col-12 col-md-3 mt-3 mt-md-0 d-none d-md-block" data-aos="fade-up" data-aos-duration="500"
            data-aos-easing="ease-in-out">
            <img class="rounded shadow-sm" style="width: 100%;" src="{{ asset('cv-naesila/assets/i1.jpeg') }}"
                alt="business profile">
        </div>
        <div class="col-12 col-md-9" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
            <span>
                Kami adalah salah satu perusahaan
                penyedia jasa sewa otomotif terdepan
                dan paling berpengalaman di Indonesia,
                dan melayani di seluruh wilayah Indonesia.
                Kenyamanan anda adalah prioritas
                kami dan solusi menyeluruh kebutuhan
                penyewaan kendaraan operasional,
                dimana pelanggan terbebas dari
                kekhawatiran atas perlindungan asuransi
                kendaraan, perpanjangan Ijin/STNK,
                perbaikan kendaraan di seluruh
                Indonesia termasuk layanan 24 jam dan
                kendaraan pengganti selama kendaraan
                sewa dalam perbaikan.
            </span>
        </div>
        <div class="col-12 col-md-3 mt-3 mt-md-0 d-md-none" data-aos="fade-up" data-aos-duration="500"
            data-aos-easing="ease-in-out">
            <img class="rounded shadow-sm" style="width: 100%;" src="{{ asset('cv-naesila/assets/i1.jpeg') }}"
                alt="business profile">
        </div>
    </div>
</div>
<div class="py-3 px-4 bg-primary d-none d-md-block" style="position: absolute; top:0; right:0; width:200px;"
    data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
</div>
</div>

<div class="container-fluid mt-5" id="layanan_kami">
<div class="container">
    <h3 class="text-primary w-100 text-center" data-aos="fade-up" data-aos-duration="500"
        data-aos-easing="ease-in-out">Layanan Kami</h3>
    <div class="row row-cols-1 row-cols-md-4 m-3 mt-md-5 text-center justify-content-center">
        <div class="col p-3">
            <div class="rounded p-3 resp-shadow hover-up" data-aos="fade-up" data-aos-duration="500"
                data-aos-easing="ease-in-out">
                <img width="50" src="{{ asset('cv-naesila/assets/drive-icon.svg') }}" alt="icon">
                <h4 class="mt-3">Fleksibilitas</h4>
                <span class="mt-2 d-block">
                    Jenis kendaraan dapat sesuai keinginan anda
                </span>
            </div>
        </div>
        <div class="col p-3">
            <div class="rounded p-3 resp-shadow hover-up" data-aos="fade-up" data-aos-duration="500"
                data-aos-easing="ease-in-out">
                <img width="50" src="{{ asset('cv-naesila/assets/drive-icon.svg') }}" alt="icon">
                <h4 class="mt-3">Responsif</h4>
                <span class="mt-2 d-block">
                    Menemani perjalanan anda dalam kegiatan apapun
                </span>
            </div>
        </div>
    </div>
</div>
</div>
<br>
<div class="container-fluid p-0 py-5 mt-5 overflow-hidden" style="background-color: #f7f7f7; position:relative"
id="daftar_mobil">
<h3 class="text-primary w-100 text-center" data-aos="fade-up" data-aos-duration="500"
    data-aos-easing="ease-in-out">Daftar Mobil</h3>
<div class="container d-flex mt-5">
    <div class="row row-cols-1 row-cols-md-4 px-3 px-md-0">
        @foreach ($data as $item)
        <div class="col p-2 mt-2 mt-md-0">
            <div class="card hover-up" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <img src="{{ $item->image_path }}" class="card-img-top" alt="mobil">
                <div class="card-body">
                    <span class="card-text">{{ $item->nama }}</span>
                    <br>
                    <span class="text-success">Harga Rp. {{ $item->harga_hari }} /hari</span>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="https://wa.me/{{ env('PHONE') }}?text=Saya mau tanya tentang mobil {{$item->nama}}%0A{{ url('mobil/'.$item->slug) }}" class="btn btn-sm btn-outline-success" style="width: 100px">Sewa</a>
                    <a href="{{ url('mobil/'.$item->slug) }}" class="btn btn-sm btn-outline-primary" style="width: 100px">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="w-100 d-flex justify-content-center mt-5">
    <a href="{{ url('daftar-mobil') }}" style="text-decoration: none;">
        <button class="btn btn-primary text-white no_shadow" data-aos="fade-up" data-aos-duration="500"
            data-aos-easing="ease-in-out">Lihat Selengkapnya<i class="bi bi-arrow-right ms-3"></i></button>
    </a>
</div>

<div class="py-3 px-4 bg-primary d-none d-md-block" style="position: absolute; top:0; left:0; width:200px;"
    data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
</div>

</div>
@endsection
