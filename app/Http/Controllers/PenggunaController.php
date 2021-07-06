<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use pengguna;

class PenggunaController extends Controller
{
    public function index()
    {
        return view('admin.pengguna.pengguna');
    }
}
