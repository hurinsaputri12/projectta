<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = [
        'judul_buku', 'nama_pengarang', 'tahun_terbit', 'penerbit', 'jumlah_halaman', 'jumlah_buku', 'jenis_buku', 'file_ebook', 'foto_cover', 'kategori_id', 'sinopsis', 'jumlah_baca', 'donatur_id',
    ];
}
