<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SimpanEbook extends Model
{
    protected $fillable = [
        'user_id', 'buku_id',
    ];
}
