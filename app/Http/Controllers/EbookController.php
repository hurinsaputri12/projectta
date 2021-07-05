<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Kategori;
use File;
use RealRashid\SweetAlert\Facades\Alert;

class EbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ebook = Buku::select('bukus.id as buku_id','bukus.judul_buku','bukus.nama_pengarang','bukus.tahun_terbit','bukus.penerbit','bukus.jumlah_halaman','bukus.jumlah_buku','bukus.jenis_buku','bukus.file_ebook','kategoris.nama_kategori')
                        ->join('kategoris','kategoris.id','=','bukus.kategori_id')
                        ->where('jenis_buku', 'ebook')
                        ->orderBy('bukus.id','desc')
                        ->get();

        return view('admin.ebook.ebook', compact('ebook'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.ebook.tambahebook', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama_file = str_replace(' ','',$request->judul_buku);
        $ebook = $request->file('file_ebook');
        $nama_ebook = 'ebook-'.$nama_file.'.'.$request->file('file_ebook')->extension();
        $path = public_path('file/ebook/');

        Buku::create([
            'judul_buku' => $request->judul_buku,
            'nama_pengarang' => $request->nama_pengarang,
            'tahun_terbit' => $request->tahun_terbit,
            'penerbit' => $request->penerbit,
            'jumlah_halaman' => $request->jumlah_halaman,
            'jumlah_buku' => $request->jumlah_buku,
            'jenis_buku' => "ebook",
            'kategori_id' => $request->kategori_id,
            'file_ebook' => $nama_ebook,
        ]);

        $ebook->move($path, $nama_ebook);

        return redirect()->route('admin.ebook.ebook');

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
        $ebook = Buku::find($id);
        return view('admin.ebook.editebook', compact('kategori','ebook'));
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
        $ebook = Buku::find($id);

        if($request->file('file_ebook')){
            $new_ebook = $request->file('file_ebook');

            if($ebook->file_ebook && file_exists(public_path('file/ebook/' .$ebook->file_ebook))){
                File::delete(public_path('file/ebook/'. $ebook->file_ebook));
            }
            $nama_file = str_replace(' ','',$request->judul_buku);
            $file = 'ebookbaru-'.$nama_file.'.'.$request->file('file_ebook')->extension();
            $path = public_path('file/ebook/');
            $ebook->update([
                'judul_buku' => $request->judul_buku,
                'nama_pengarang' => $request->nama_pengarang,
                'tahun_terbit' => $request->tahun_terbit,
                'penerbit' => $request->penerbit,
                'jumlah_halaman' => $request->jumlah_halaman,
                'jumlah_buku' => $request->jumlah_buku,
                'jenis_buku' => "ebook",
                'kategori_id' => $request->kategori_id,
                'file_ebook' => $file,
            ]);
            $new_photo->move($path, $file);
        }
        else{
            $ebook->update($request->all());
        }


        Alert::toast('Update Ebook Berhasil', 'success');

        return redirect()->route('admin.ebook.ebook');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ebook = Buku::find($id);

            $ebook->delete();


            Alert::toast('Hapus Ebook Berhasil', 'success');

            return redirect()->route('admin.ebook.ebook');
    }

    public function tampilEbook($id)
    {
        $ebook = Buku::find($id);
        return view('admin.ebook.filepdf', compact('ebook'));
    }
}

