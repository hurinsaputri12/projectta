<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relawan extends Model
{
    protected $fillable = [
        'relawan_id', 'lapakbaca_id', 'status'
    ];

}
