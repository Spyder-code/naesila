<?php

namespace App\Http\Livewire;

use App\Perusahaan;
use Livewire\Component;

class Company extends Component
{

    public $perusahaan,$nama,$email,$phone,$logo,$alamat;
    public $read = true;

    public function render()
    {
        $this->perusahaan = Perusahaan::findOrFail(1);
        return view('livewire.company');
    }

    public function edit()
    {
        $this->read = false;
        $this->perusahaan = Perusahaan::findOrFail(1);
        $this->nama = $this->perusahaan->nama;
        $this->email = $this->perusahaan->email;
        $this->alamat = $this->perusahaan->alamat;
        $this->phone = $this->perusahaan->phone;
    }

    public function read()
    {
        $this->read = true;
    }

    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        Perusahaan::find(1)->update([
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);
        $this->read = true;
    }

}
