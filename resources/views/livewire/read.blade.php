<div>
    <button class="btn btn-info btn-sm mb-2" wire:click='edit'> Edit</button>
    <h4 class="font-weight-bold">Nama Perusahaan</h4>
    <h6>{{ $perusahaan->nama }}</h6>
    <hr>
    <h4 class="font-weight-bold">Alamat</h4>
    <h6>{{ $perusahaan->alamat }}</h6>
    <hr>
    <h4 class="font-weight-bold">Email</h4>
    <h6 class="mb-4">{{ $perusahaan->email }}</h6>
    <hr>
    <h4 class="font-weight-bold">Nomor</h4>
    <h6 class="mb-4">{{ $perusahaan->phone }}</h6>
    <hr>
</div>
