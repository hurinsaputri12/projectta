<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lapak;
use File;
use App\Relawan;
use RealRashid\SweetAlert\Facades\Alert;

class LapakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $lapak = variabel -> menampilkan data di database "lapak" yang disimpan di variabel
        // lalu di compact dilempar ditampilkan di halaman
        $lapak = Lapak::all();
        return view('admin.lapak.lapak', compact('lapak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lapak.tambahlapak', compact('lapak'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Lapak::create([
            'tanggal' => $request->tanggal,
            'nama_kegiatan' => $request->nama_kegiatan,
            'jumlah_relawan' => $request->jumlah_relawan,
            'lokasi' => $request->lokasi,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);
        return redirect()->route('admin.lapak.lapak');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lapak=Lapak::find($id);
        return view('admin.lapak.detaillapak', compact('lapak'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lapak = Lapak::find($id);
        return view('admin.lapak.editlapak', compact('lapak'));
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
        $lapak = Lapak::find($id);
        $lapak->update($request->all());
        Alert::toast('update data berhasil', 'success');
        return redirect()->route('admin.lapak.lapak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lapak = Lapak::Find($id);
        $lapak->delete();
        Alert::toast('hapus data berhasil', 'success');
        return redirect()->back();


    }

    public function validasiRelawan()
    {
        $relawan = Relawan::join('lapaks', 'lapaks.id', '=', 'relawans.lapakbaca_id')
                            ->join('users', 'users.id', '=', 'relawans.relawan_id')
                            ->select('users.nama', 'lapaks.nama_kegiatan', 'lapaks.tanggal', 'relawans.id')
                            ->where('status', 0)->get();
        return view('admin.lapak.validasirelawan', compact('relawan'));
    }

    public function upValidasiRelawan(Request $request , $id)
    {
        $relawan = Relawan::find($id);
        if($request->status == 1){
        $relawan->update(['status' => 1]);
        Alert::toast('Relawan Berhasil Disetujui', 'success');
        return redirect()->back();
        }
        elseif($request->status == 0){
        $relawan->delete();
        Alert::toast('Relawan Tidak Disetujui','error');
        return redirect()->back();
        }
    }

    public function daftarRelawan()
    {
        $relawan = Relawan::join('lapaks', 'lapaks.id', '=', 'relawans.lapakbaca_id')
                            ->join('users', 'users.id', '=', 'relawans.relawan_id')
                            ->select('users.nama', 'lapaks.nama_kegiatan', 'lapaks.tanggal', 'relawans.id')
                            ->where('status', 1)->get();
        return view('admin.lapak.daftarrelawan', compact('relawan'));
    }

    public function hapusRelawan($id)
    {
        $relawan = Relawan::find($id);
        $relawan->delete();
        Alert::toast('Relawan berhasil dihapus', 'success');
        return redirect()->back();
    }
}
