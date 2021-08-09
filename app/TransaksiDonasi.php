<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiDonasi extends Model
{
    protected $fillable = [
        'penerima_id', 'donasi_id',
    ];
}
