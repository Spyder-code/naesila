<div>
    <!-- Content Row -->

<div class="row mb-5">
    <div class="col-md-12">
    <div class="card shadow-sm mb-4 py-3 border-left-primary">
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Sorry!</strong> invalid input.<br><br>
                <ul style="list-style-type:none;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="row pl-4 pr-4">
                <div class="col-md-7">
                    @if ($read)
                        @include('livewire.read')
                    @else
                        @include('livewire.edit')
                    @endif
                </div>
                <div class="col-md-5">
                <img src="{{ Storage::url('images/'.$perusahaan->logo) }}" alt="avatar" class="img-fluid">
                <button class="btn btn-primary mt-3 float-right" data-toggle="modal" data-target="#modalGambar">Edit Ikon</button>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- modal gambar -->
<div class="modal fade" id="modalGambar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Gambar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="{{ url('updateLogo') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="gambarProfil">Masukan Gambar Profil Baru</label>
            <input id="gambarProfil" type="file" name="image" onchange="loadFile(event)" required>
            <div>
                <img id="output" class="img-thumbnail mt-3" />
            </div>
            <script>
            var loadFile = function(event) {
                var output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                URL.revokeObjectURL(output.src)
                }
            };
            </script>
            <button type="submit" class="btn btn-primary float-right mt-3">Submit</button>
        </form>
    </div>
    </div>
    </div>
</div>

</div>
