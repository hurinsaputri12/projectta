<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Kategori;
use File;
use RealRashid\SweetAlert\Facades\Alert;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\H ttp\Response
     */
    public function index()
    {
        $buku = Buku::select('bukus.id as buku_id','bukus.judul_buku','bukus.nama_pengarang','bukus.tahun_terbit','bukus.penerbit','bukus.jumlah_halaman','bukus.jumlah_buku','bukus.jenis_buku','bukus.foto_cover','kategoris.nama_kategori')
                        ->join('kategoris','kategoris.id','=','bukus.kategori_id')
                        ->where('jenis_buku', 'buku-cetak')
                        ->orderBy('bukus.id','desc')
                        ->get();
        return view('admin.buku.buku', compact('buku'));
    }
    /**
      * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.buku.tambahbuku', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('foto_cover');
        $nama_file = str_replace(' ','',$request->judul_buku);
        $image_name = 'cover-'.$nama_file.'.'.$request->file('foto_cover')->extension();
        $path = public_path('img/buku/');
        Buku::create([
            'judul_buku' => $request->judul_buku,
            'nama_pengarang' => $request->nama_pengarang,
            'tahun_terbit' => $request->tahun_terbit,
            'penerbit' => $request->penerbit,
            'jumlah_halaman' => $request->jumlah_halaman,
            'jumlah_buku' => $request->jumlah_buku,
            'jenis_buku' => "buku-cetak",
            'kategori_id' => $request->kategori_id,
            'foto_cover' => $image_name,
        ]);
        $image->move($path, $image_name);
        return redirect()->route('admin.buku.buku');
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
        $kategori = Kategori::all();
        $buku = Buku::find($id);
        return view('admin.buku.editbuku', compact('kategori','buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        public function update($id, Request $request)
        {
            $buku = Buku::find($id);

            if($request->file('foto_cover')){
                $new_photo = $request->file('foto_cover');

                if($buku->foto_cover && file_exists(public_path('img/buku/' .$buku->foto_cover))){
                    File::delete(public_path('img/buku/'. $buku->foto_cover));
                }
                $nama_file = str_replace(' ','',$request->judul_buku);
                $images = 'cover-'.$nama_file.'.'.$request->file('foto_cover')->extension();
                $path = public_path('img/buku/');
                $buku->update([
                    'judul_buku' => $request->judul_buku,
                    'nama_pengarang' => $request->nama_pengarang,
                    'tahun_terbit' => $request->tahun_terbit,
                    'penerbit' => $request->penerbit,
                    'jumlah_halaman' => $request->jumlah_halaman,
                    'jumlah_buku' => $request->jumlah_buku,
                    'jenis_buku' => "buku-cetak",
                    'kategori_id' => $request->kategori_id,
                    'foto_cover' => $images,
                ]);
                $new_photo->move($path, $images);
            }
            else{
                $buku->update($request->all());
            }



            Alert::toast('Update Buku Berhasil', 'success');

            return redirect()->route('admin.buku.buku');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $buku = Buku::find($id);
            if($buku->foto_cover && file_exists(public_path('img/buku/' .$buku->foto_cover))){
                File::delete(public_path('img/buku/'. $buku->foto_cover));
            }
            $buku->delete();


            Alert::toast('Hapus Buku Berhasil', 'success');

            return redirect()->route('admin.buku.buku');
        }
    }

