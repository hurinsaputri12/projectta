<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lapak extends Model
{
    protected $fillable = [
        'nama_kegiatan', 'lokasi', 'latitude', 'longitude', 'tanggal', 'jumlah_relawan', 'user_id',
    ];
}
