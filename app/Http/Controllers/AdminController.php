<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\User;
use App\Buku;
use App\Lapak;

class AdminController extends Controller
{
    public function beranda(){
        $jumlah_donatur = Buku::whereNotNull('donatur_id')->count();
        $jumlah_buku = Buku::where('jenis_buku', 'buku-cetak')->count();
        $jumlah_ebook = Buku::where('jenis_buku', 'ebook')->count();
        $jumlah_lapak = Lapak::count();
        return view('admin.beranda', compact('jumlah_donatur', 'jumlah_buku', 'jumlah_ebook', 'jumlah_lapak'));

    }
    public function tambahAdmin(){
        return view('auth.tambahadmin');

    }

    public function upAdmin(Request $request){
        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
            'password' => Hash::make($request->password),
            'role_id' => 1,
        ]);

        Alert::success('Tambah Admin Berhasil');

        return redirect()->back();

    }


}
