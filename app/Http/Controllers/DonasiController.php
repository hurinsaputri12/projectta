<?php

namespace App\Http\Controllers;
use App\Donasi;
use App\Kategori;
use Illuminate\Http\Request;
use Alert;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function validasiPengajuanDonasiBuku()
    {
        $donasibuku = Donasi::join('users','users.id','=','donasis.donatur')
            ->select('users.nama','donasis.id','donasis.judul_buku','donasis.jumlah_buku','donasis.alamat_donatur','donasis.foto_cover')
             ->where('jenis_buku','buku-cetak')
             ->where('status', 0)
             ->get();
        return view('admin.donasibuku.validasipengajuandonasi', compact('donasibuku'));
    }

    public function upValidasiPengajuanDonasi(Request $request, $id){

        $donasi = Donasi::find($id);
        if($request->status == 1){
        $donasi->update(['status' => 1]);
        Alert::toast('Donasi Berhasil Disetujui', 'success');
        return redirect()->back();
        }
        else{
        Alert::toast('Donasi Tidak Disetujui', 'error');
        return redirect()->back();
        }
    }

    public function daftarDonasiBuku()
    {
        $donasibuku = Donasi::join('users','users.id','=','donasis.donatur')
            ->select('users.nama','donasis.id','donasis.judul_buku','donasis.jumlah_buku','donasis.alamat_donatur','donasis.foto_cover')
             ->where('jenis_buku','buku-cetak')
             ->where('status', 3)
             ->get();
        return view('admin.donasibuku.daftardonasi', compact('donasibuku'));
    }

    public function validasiDonasiBuku()
    {
        $donasibuku = Donasi::join('users','users.id','=','donasis.donatur')
            ->select('users.nama','donasis.id','donasis.judul_buku','donasis.jumlah_buku','donasis.alamat_donatur','donasis.foto_cover')
             ->where('jenis_buku','buku-cetak')
             ->where('status', 2)
             ->get();
        return view('admin.donasibuku.validasidonasi', compact('donasibuku'));
    }

    public function upValidasiDonasi(Request $request, $id){

        $donasibuku = Donasi::find($id);
        if($request->status == 1){
        $donasibuku->update(['status' => 3]);
        Alert::toast('Donasi Berhasil Disetujui', 'success');
        return redirect()->back();
        }
        else{
        Alert::toast('Donasi Tidak Disetujui', 'error');
        return redirect()->back();
        }
    }

    public function migrasiDataBuku(Request $request, $id){

        $kategori = Kategori::all();
        $donasibuku = Donasi::find($id);
        return view('admin.donasibuku.migrasidatabuku', compact('kategori', 'donasibuku'));
    }

    public function validasiPengajuanDonasiEbook()
    {
        $donasiebook = Donasi::join('users','users.id','=','donasis.donatur')
             ->select('users.nama','donasis.id','donasis.jenis_buku','donasis.judul_buku','donasis.jumlah_buku','donasis.alamat_donatur','donasis.file_ebook', 'donasis.sinopsis')
             ->where('jenis_buku','ebook')
             ->where('status', 0)
             ->get();
        return view('admin.donasiebook.validasipengajuandonasiebook', compact('donasiebook'));
    }

    public function upValidasiPengajuanDonasiEbook(Request $request, $id){

        $donasiebook = Donasi::find($id);
        if($request->status == 1){
        $donasiebook->update(['status' => 1]);
        Alert::toast('Donasi ebook Berhasil Disetujui', 'success');
        return redirect()->back();
        }
        else{
        Alert::toast('Donasi ebook Tidak Disetujui', 'error');
        return redirect()->back();
        }
    }

    public function daftarDonasiEbook()
    {
        $donasiebook = Donasi::join('users','users.id','=','donasis.donatur')
             ->select('users.nama','donasis.id','donasis.jenis_buku','donasis.judul_buku','donasis.jumlah_buku','donasis.alamat_donatur','donasis.file_ebook','donasis.sinopsis')
             ->where('jenis_buku','ebook')
             ->where('status', 3)
             ->get();
        return view('admin.donasiebook.daftardonasiebook', compact('donasiebook'));
    }

    public function validasiDonasiEbook()
    {
        $donasiebook = Donasi::join('users','users.id','=','donasis.donatur')
             ->select('users.nama','donasis.id','donasis.jenis_buku','donasis.judul_buku','donasis.jumlah_buku','donasis.alamat_donatur','donasis.file_ebook', 'donasis.sinopsis')
             ->where('jenis_buku','ebook')
             ->where('status', 2)
             ->get();
        return view('admin.donasiebook.validasidonasiebook', compact('donasiebook'));
    }

    public function upValidasiDonasiEbook(Request $request, $id){

        $donasiebook = Donasi::find($id);
        if($request->status == 1){
        $donasiebook->update(['status' => 3]);
        Alert::toast('Donasi Ebook Berhasil Disetujui', 'success');
        return redirect()->back();
        }
        else{
        Alert::toast('Donasi Ebook Tidak Disetujui', 'error');
        return redirect()->back();
        }
    }

    public function migrasiDataEbook(Request $request, $id){

        $kategori = Kategori::all();
        $donasiebook = Donasi::find($id);
        return view('admin.donasiebook.migrasidataebook', compact('kategori', 'donasiebook'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
