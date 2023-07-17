<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function createadmin(){
        return view('logina');
    }
    public function create(){
        return view('login');
    }

    public function storeadmin(Request $request){
        $request->validate([
            'nama_admin' => 'required',
            'pass' => 'required'
        ]);
        $admin = Admin::where('nama_admin',$request->nama_admin)->first();
        if($admin){
            if(Hash::check($request->pass, $admin->pass)){
                Auth::login($admin);
                return redirect('/ofice')->with('succes', 'berhasil masuk');
            }
        }
        throw ValidationException::withMessages([
            'nama_admin' => 'salah, coba periksa lagi!'
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'mail_mhs' => 'required|email:dns',
            'password' => 'required'
        ]);
        $mahasiswa = Mahasiswa::where('mail_mhs',$request->mail_mhs)->first();
        if($mahasiswa){
            if(Hash::check($request->password, $mahasiswa->password)){
                Auth::login($mahasiswa);
                return redirect('/home')->with('succes', 'berhasil masuk');
            }
        }
        throw ValidationException::withMessages([
            'mail_mhs' => 'salah, coba periksa lagi!'
        ]);
    }
}
