<div>
    <h4 class="font-weight-bold">Nama Perusahaan</h4>
        <input type="text" wire:model="nama" class="form-control input-sm">
    <hr>
    <h4 class="font-weight-bold">Alamat</h4>
        <input type="text" wire:model="alamat" class="form-control input-sm">
    <hr>
    <h4 class="font-weight-bold">Email</h4>
        <input type="text" wire:model="email" class="form-control input-sm">
    <hr>
    <h4 class="font-weight-bold">Nomor</h4>
        <input type="text" wire:model="phone" class="form-control input-sm">
    <hr>
    <div class="d-flex mt-2">
        <button class="btn btn-danger btn-sm mr-4" wire:click='read'> Cancel</button>
        <button class="btn btn-success btn-sm" wire:click='store'> Ubah</button>
    </div>
</div>
