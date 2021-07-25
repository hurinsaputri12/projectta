<?php

namespace App\Http\Controllers;
use App\Donasi;
use Illuminate\Http\Request;

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
             ->where('jenis_buku','buku-cetak')
             ->where('status', 0)
             ->get();
        return view('admin.donasibuku.validasipengajuandonasi', compact('donasibuku'));
    }

    public function daftarDonasiBuku()
    {
        $donasibuku = Donasi::join('users','users.id','=','donasis.donatur')
             ->where('jenis_buku','buku-cetak')
             ->where('status', 2)
             ->get();
        return view('admin.donasibuku.daftardonasi', compact('donasibuku'));
    }

    public function validasiDonasiBuku()
    {
        $donasibuku = Donasi::join('users','users.id','=','donasis.donatur')
             ->where('jenis_buku','buku-cetak')
             ->where('status', 1)
             ->get();
        return view('admin.donasibuku.validasidonasi', compact('donasibuku'));
    }

    public function validasiPengajuanDonasiEbook()
    {
        $donasiebook = Donasi::join('users','users.id','=','donasis.donatur')
             ->where('jenis_buku','ebook')
             ->where('status', 0)
             ->get();
        return view('admin.donasiebook.validasipengajuandonasiebook', compact('donasiebook'));
    }

    public function daftarDonasiEbook()
    {
        $donasiebook = Donasi::join('users','users.id','=','donasis.donatur')
             ->where('jenis_buku','ebook')
             ->where('status', 2)
             ->get();
        return view('admin.donasiebook.daftardonasiebook', compact('donasiebook'));
    }

    public function validasiDonasiEbook()
    {
        $donasiebook = Donasi::join('users','users.id','=','donasis.donatur')
             ->where('jenis_buku','ebook')
             ->where('status', 1)
             ->get();
        return view('admin.donasiebook.validasidonasiebook', compact('donasiebook'));
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
