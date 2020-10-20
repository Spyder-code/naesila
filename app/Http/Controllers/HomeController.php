<?php

namespace App\Http\Controllers;

use App\Image;
use App\Kategori;
use App\Kelengkapan;
use App\Mobil;
use App\Perusahaan;
use App\Pesan;
use App\Produk;
use App\Transaksi;
use App\User;
use App\Visitor;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pesan = Pesan::all()->count();
        $mobil = Mobil::all()->count();
        $visitor = Visitor::all()->count();
        return view('admin.index',compact('pesan','mobil','visitor'));
    }

    public function mobil()
    {
        $data = Mobil::all();
        return view('admin.mobil',compact('data'));
    }

    public function detailMobil($id)
    {
        $data = Mobil::find($id);
        return view('admin.detailMobil',compact('data'));
    }

    public function ubahMobil($id)
    {
        $data = Mobil::find($id);
        return view('admin.ubahMobil',compact('data'));
    }

    public function mobilTambah()
    {
        return view('admin.tambahMobil');
    }

    public function profile()
    {
        $id = Auth::id();
        $user = User::find($id);
        return view('admin.profile',compact('user'));
    }

    public function pesan()
    {
        $data = Pesan::all();
        return view('admin.pesan',compact('data'));
    }

    // Update Function
    public function updateProfilImage(Request $request)
    {
        $request->validate([
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->oldImage!="default.jpg"){
            if (file_exists(public_path('images/user/',$request->oldImage))) {
                unlink(storage_path('app/public/images/user/'.$request->oldImage));
                    if ($files = $request->file('image')) {
                        $profileImage = $files->getClientOriginalName();
                        $path = $files->storeAs('public/images/user', $profileImage);
                        $url = Storage::url($path);
                        $imgUrl = url($url);
                        User::where('id',$request->id)
                            ->update([
                            'image' =>  $profileImage,
                            'image_path' =>  $imgUrl,
                        ]);
                    }
            }
        }else{
            if ($files = $request->file('image')) {
                $profileImage = $files->getClientOriginalName();
                $path = $files->storeAs('public/images/user', $profileImage);
                $url = Storage::url($path);
                $imgUrl = url($url);
                User::where('id',$request->id)
                    ->update([
                    'image' =>  $profileImage,
                    'image_path' =>  $imgUrl,
                ]);
            }
        }
        return back()->with('success','Foto profil berhasil di ubah!');
    }


    public function updatePassword(Request $request)
    {
        $request->validate([
            'oldPassword'  => 'required',
            'newPassword'  => 'required'
        ]);
        $password = Auth::user()->password;
        if(Hash::check($request->oldPassword, $password)){
            User::where('id',$request->id)
            ->update([
            'password' => Hash::make($request->newPassword)
            ]);
            return back()->with('success','Password berhasil di ubah!');
        } else {
            return back()->with('danger','Password gagal di ubah!');
        }
    }

    public function updateUsername(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,name'
        ]);
        User::where('id',$request->id)
            ->update([
            'name' =>$request->username
            ]);
        return back()->with('success','Username berhasil di ubah!');
    }

    public function updateMobil(Request $request)
    {
        $nama = str_replace('/','-',$request->nama);
        $request->validate([
            'nama' => 'required',
            'hargaHari' => 'required',
            'hargaJam' => 'required',
            'deskripsi' => 'required',
            'kelengkapan1' => 'required',
        ]);

        Mobil::find($request->id)->update([
            'nama' => $nama,
            'harga_hari' => $request->hargaHari,
            'harga_jam' => $request->hargaJam,
            'deskripsi' => $request->deskripsi,
        ]);

        Kelengkapan::find($request->idKel1)->update([
            'nama' => $request->kelengkapan1
        ]);

        if ($request->kelengkapan2 != null) {
            if($request->idKel2 == null){
                Kelengkapan::create([
                    'mobil_id' => $request->id,
                    'nama' => $request->kelengkapan2
                ]);
            }else{
                Kelengkapan::find($request->idKel2)->update([
                    'nama' => $request->kelengkapan2
                ]);
            }
        }
        if ($request->kelengkapan3 != null) {
            if($request->idKel3 == null){
                Kelengkapan::create([
                    'mobil_id' => $request->id,
                    'nama' => $request->kelengkapan3
                ]);
            }else{
                Kelengkapan::find($request->idKel3)->update([
                    'nama' => $request->kelengkapan3
                ]);
            }
        }
        if($request->image != null){
            if ($files = $request->file('image')) {
                $profileImage = $files->getClientOriginalName();
                $path = $files->storeAs('public/images/mobil', $profileImage);
                $url = Storage::url($path);
                $imgUrl = url($url);
                Mobil::find($request->id)->update([
                    'image' => $profileImage,
                    'image_path' => $imgUrl,
                ]);
            }
        }

        return redirect('admin/mobil/detail/'.$request->id)->with('success','Data berhasil diubah!');
    }

    // Create function

    public function addMobil(Request $request)
    {
        $nama = str_replace('/','-',$request->nama);
        $request->validate([
            'nama' => 'required',
            'hargaHari' => 'required',
            'hargaJam' => 'required',
            'deskripsi' => 'required',
            'kelengkapan1' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($files = $request->file('image')) {
            $profileImage = $files->getClientOriginalName();
            $path = $files->storeAs('public/images/mobil', $profileImage);
            $url = Storage::url($path);
            $imgUrl = url($url);
            $mobil = Mobil::create([
                'nama' => $nama,
                'harga_hari' => $request->hargaHari,
                'harga_jam' => $request->hargaJam,
                'deskripsi' => $request->deskripsi,
                'image' => $profileImage,
                'image_path' => $imgUrl,
                'status' => 0,
            ]);
            Kelengkapan::create([
                'mobil_id' => $mobil->id,
                'nama' => $request->kelengkapan1
            ]);
            if ($request->kelengkapan2 != null) {
                Kelengkapan::create([
                    'mobil_id' => $mobil->id,
                    'nama' => $request->kelengkapan2
                ]);
            }
            if ($request->kelengkapan3 != null) {
                Kelengkapan::create([
                    'mobil_id' => $mobil->id,
                    'nama' => $request->kelengkapan3
                ]);
            }
        }

        return redirect('admin/mobil')->with('success','Data berhasil ditambah!');
    }
    // Delete function

    public function deleteMobil(Request $request)
    {
        Mobil::find($request->id)->delete();
        return back()->with('success',$request->judul.' Berhasil dihapus!');
    }

    public function deletePesan(Request $request)
    {
        Pesan::find($request->id)->delete();
        return back()->with('success',$request->judul.' Berhasil dihapus!');
    }
}
