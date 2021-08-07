<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function tampilRegister(){
        return view('auth.register');

    }

    public function register(Request $request){
        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
            'role_id' => 1,
        ]);

        Alert::success('Registrasi Berhasil');

        return redirect()->route('auth.login');

    }

    public function tampilLogin(){
        return view('auth.login');

    }
    public function login(Request $request){

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials)){

            if(auth()->user()->role_id == 1){
                Alert::success('Selamat datang Admin');
                return redirect()->route('admin.beranda');
            }
        }
        Alert::error('Akun tidak ditemukan', 'Gagal');
        return redirect()->route('auth.login');
    }



    public function tampilReset(){
        return view('auth.reset');

    }

    public function reset(Request $request){
        $email = $request->email;
        $nomor_telepon = $request->nomor_telepon;

        $user = User::where('email', $email)->where('nomor_telepon', $nomor_telepon)->first();

        if(isset($user)){
            $user->update([
                'password' => Hash::make($request->password),
            ]);

            Alert::success('Reset Berhasil');
            return redirect()->route('auth.login');
        }
        else{
            Alert::error('Email Tidak Ditemukan', 'Reset Berhasil');
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        Alert::success('Selamat Tinggal', 'Anda Berhasil Logout');
        return redirect()->route('landing');
    }


}
