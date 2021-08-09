<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    protected $fillable = [
        'judul_buku', 'jumlah_buku', 'user_id', 'jenis_buku', 'alamat_donatur', 'file_ebook', 'foto_cover', 'status', 'sinopsis', 'jenis_donasi', 'bukti_donasi',
    ];
    
}
