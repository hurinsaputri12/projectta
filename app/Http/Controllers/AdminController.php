<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\User;
use App\Buku;
use App\Lapak;
use App\Kategori;
use DB;

class AdminController extends Controller
{
    public function beranda(Request $request){

        // menampilkan jumlah pada beranda
        $jumlah_donatur = Buku::whereNotNull('donatur_id')->count();
        $jumlah_buku = Buku::where('jenis_buku', 'buku-cetak')->count();
        $jumlah_ebook = Buku::where('jenis_buku', 'ebook')->count();
        $jumlah_lapak = Lapak::count();

        // menampilkan daftar donasi buku
        $daftar = Buku::join('users','users.id','=','bukus.donatur_id')
                        ->join('kategoris','kategoris.id','=','bukus.kategori_id')
                        ->select('users.nama','bukus.judul_buku','kategoris.nama_kategori','bukus.jumlah_buku','bukus.jenis_buku')
                        ->whereNotNull('bukus.donatur_id')
                        ->get();

        // menampilkan grafik donatur
        // if($request->tahun == 0)
        //     $tahun  = Date('Y');
        // else
        //     $tahun = $request->tahun;

        // $grafik = Buku::select(DB::raw('SUM(jumlah_buku) as total_buku'), 'bukus.created_at')
        //                 ->whereNotNull('donatur_id')
        //                 ->whereYear('created_at', $tahun)
        //                 ->get();

        // $categories = [];

        // $data = [];

        // foreach ($grafik as $item) {
        //         $categories[] = \Carbon\Carbon::parse($item->created_at)->isoFormat('MMMM');
        //         $data[] = $item->total_buku;
        // }

        // $input_tahun = Buku::select(DB::raw('YEAR(panen.created_at) as year'))
        //                         ->whereNotNull('bukus.donatur_id')
        //                         ->orderBy('year','desc')
        //                         ->get();

        return view('admin.beranda', compact('jumlah_donatur', 'jumlah_buku', 'jumlah_ebook', 'jumlah_lapak', 'daftar',
         'categories', 'data', 'input_tahun', 'tahun'));

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
