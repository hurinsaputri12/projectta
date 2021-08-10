<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthApiController extends Controller
{
    public function register(Request $request){
        $user = [
            'nama' => $request->nama,
            'email' => $request->email,
            'password'=> Hash::make($request->password),
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
            'api_token' => Str::random(64),
            'role_id' => 2,
        ];

        User::create($user);

        $token = User::select('api_token')->where('email', $request->email)->first();

        if ($user != null) {
            $pesan = [
                        "message" => "Daftar Berhasil",
                        "error" => false,
                        "Token" => $token->api_token,

                    ];
                     return response()->json($pesan,201);
        } else {
            $pesan = [
                        "message" => "Daftar Gagal",
                        "error" => true
                    ];
        }

        return response()->json($pesan,422);
}

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email' => $email, 'password' => $password])){
            $pengguna = User::where('email',$email)->first();

            $result =[
                "status" => true,
                "id" => $pengguna->id,
                "nama"=> $pengguna->nama,
                "email"=> $pengguna->email,
                "token"=> $pengguna->api_token,
                "alamat"=> $pengguna->alamat,
            ];
            return response()->json($result,200);
        }
            return response()->json("Login Gagal",401);
    }
}


