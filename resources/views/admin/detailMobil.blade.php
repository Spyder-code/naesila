@extends('layouts.admin')

@section('content')
<div class="container">
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
    @if ($message = Session::get('danger'))
        <div class="row">
            <div class="col mt-3">
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col col-sm-5">
                            <div class="row">
                                <div class="col col-sm-12">
                                    <img src="{{$data->image_path}}" class="img-thumbnail border border-success" id="gambarMain" style="height: 400px;">
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-7">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="list-group text-left">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col col-4">
                                                    <label for="address">Nama produk</label>
                                                </div>
                                                <div class="col col-2">
                                                    <label for="">:</label>
                                                </div>
                                                <div class="col">
                                                    {{$data->nama}}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col col-4">
                                                    <label for="address">Harga sewa <br>/Hari</label>
                                                </div>
                                                <div class="col col-2">
                                                    <label for="">:</label>
                                                </div>
                                                <div class="col">
                                                    Rp. {{$data->harga_hari}}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col col-4">
                                                    <label for="address">Harga sewa <br>/6 Jam</label>
                                                </div>
                                                <div class="col col-2">
                                                    <label for="">:</label>
                                                </div>
                                                <div class="col">
                                                    Rp. {{$data->harga_jam}}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col col-4">
                                                    <label for="address">Deskripsi</label>
                                                </div>
                                                <div class="col col-2">
                                                    <label for="">:</label>
                                                </div>
                                                <div class="col">
                                                    {{$data->deskripsi}}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col col-4">
                                                    <label for="address">Kelengkapan</label>
                                                </div>
                                                <div class="col col-2">
                                                    <label for="">:</label>
                                                </div>
                                                <div class="col">
                                                    <ol>
                                                        @foreach ($data->kelengkapan as $item)
                                                            <li>{{ $item->nama }}</li>
                                                        @endforeach
                                                    </ol>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex mt-2">
                                <a href="{{url('admin/mobil')}}" class="btn btn-info mr-3">Kembali</a>
                                <a href="{{url('admin/mobil/ubah/'.$data->id)}}" class="btn btn-warning mr-3">Ubah</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-script')
    <script>
        $(function () {
            $('.gambar').click(function (e) {
                e.preventDefault();
                var src = $(this).attr('src');
                $('#gambarMain').attr('src',src);
            });
        });
    </script>
@endsection
