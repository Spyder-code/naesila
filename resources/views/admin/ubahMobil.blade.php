@extends('layouts.admin')
@section('judul', "Mobil")

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
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{url('updateMobil')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <input type="hidden" name="idKel1" value="{{$data->kelengkapan[0]->id}}">
                        <input type="hidden" name="idKel2" {{ !empty($data->kelengkapan[1]) ? 'value='.$data->kelengkapan[1]->id.'' : '' }}>
                        <input type="hidden" name="idKel3" {{ !empty($data->kelengkapan[2]) ? 'value='.$data->kelengkapan[2]->id.'' : '' }}>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col col-sm-12">
                                    <label for="nama">Nama Mobil</label>
                                    <input type="text" name="nama" value="{{$data->nama}}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col col-sm-6">
                                    <label for="harga">Harga sewa /hari</label>
                                    <input type="text" name="hargaHari" value="{{$data->harga_hari}}" class="form-control uang" placeholder="Rp.">
                                </div>
                                <div class="col col-sm-6">
                                    <label for="kategori">Harga sewa /6 jam</label>
                                    <input type="text" name="hargaJam" value="{{$data->harga_jam}}" class="form-control uang" placeholder="Rp.">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" cols="30" rows="10" class="form-control" placeholder="Deskripsi mobil">{{ $data->deskripsi }}</textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col col-sm-4 mr-5">
                                    <h6 class="text-center">Gambar (klik image to change)</h6>
                                    <hr>
                                        <label for="image1" class="text-center" data-id="img1">
                                            <img src="{{$data->image_path}}" id="img1" style="height:240px;width:320px">
                                        </label>
                                        <input type="file" name="image" id="image1"  onchange="loadImg(event)" hidden>
                                </div>
                                <div class="col col-sm">
                                    <h6 class="text-center">Kelengkapan</h6>
                                    <hr>
                                        <ol>
                                            <li><input type="text" class="form-control mt-2" name="kelengkapan1" value="{{ $data->kelengkapan[0]->nama }}"></li>
                                            <li><input type="text" class="form-control mt-2" name="kelengkapan2" {{ !empty($data->kelengkapan[1]) ? 'value='.$data->kelengkapan[1]->nama.'' : '' }}></li>
                                            <li><input type="text" class="form-control mt-2" name="kelengkapan3" {{ !empty($data->kelengkapan[2]) ? 'value='.$data->kelengkapan[2]->nama.'' : '' }}></li>
                                        </ol>
                                    <div class="form-group mt-3">
                                        <button type="submit" class="btn btn-success">Ubah Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>
    <script>
            function loadImg (event){
                var id = event.target.labels[0].dataset.id;
                $('#'+id).attr('src', URL.createObjectURL(event.target.files[0]));
            };

            $(document).ready(function(){

// Format mata uang.
$('.uang').mask('000.000.000.000.000', {reverse: true});

})
    </script>
@endsection
