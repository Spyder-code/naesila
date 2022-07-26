<?php

namespace App\Http\Controllers;

use App\Mobil;
use App\Pesan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = Mobil::all()->take(4);
        return view('new.index',compact('data'));
    }

    public function daftarMobile()
    {
        $data = Mobil::all();
        return view('user.daftarMobile',compact('data'));
    }

    public function detailMobil($nama)
    {
        $data = Mobil::where('slug', $nama)->first();
        return view('user.detailMobile',compact('data'));
    }

    public function kontak()
    {
        return view('user.kontak');
    }

    public function tentang()
    {
        return view('user.tentangKami');
    }

    public function addPesan(Request $request)
    {
        Pesan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
            'status' => 0
        ]);
        return back()->with('success','Pesan berhasil terkirim!');
    }
}
