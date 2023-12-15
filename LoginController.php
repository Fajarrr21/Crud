<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginproses(Request $request){
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
         return redirect()->route('data')->with('success','selamat datang '. Auth::user()->name);
        }
        return redirect()->route('login')->with('warning','password salah');
    }
    public function daftar(){
        return view('daftar');
    }

    public function daftarproses(Request $request){
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'remember_token'=> Str::random(60),
        ]);
        return redirect()->route('login')->with('success','akun berhasil dibuat');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success','anda berhasil logout');
    }
}
