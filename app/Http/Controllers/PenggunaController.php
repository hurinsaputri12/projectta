<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = User::where('role_id', 2)->get();
        return view('admin.pengguna.pengguna', compact('pengguna'));
    }
}
