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
             ->get();
        return view('admin.donasibuku.validasipengajuandonasi', compact('donasibuku'));
    }

    public function daftarDonasiBuku()
    {
        return view('admin.donasibuku.daftardonasi');
    }

    public function validasiDonasiBuku()
    {
        return view('admin.donasibuku.validasidonasi');
    }

    public function validasiPengajuanDonasiEbook()
    {
        $donasiebook = Donasi::join('users','users.id','=','donasis.donatur')
             ->where('jenis_buku','ebook')
             ->get();
        return view('admin.donasiebook.validasipengajuandonasiebook', compact('donasiebook'));
    }

    public function daftarDonasiEbook()
    {
        return view('admin.donasiebook.daftardonasiebook');
    }

    public function validasiDonasiEbook()
    {
        return view('admin.donasiebook.validasidonasiebook');
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
