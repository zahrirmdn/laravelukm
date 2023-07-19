<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Mahasiswa;

class RegisController extends Controller
{
    // public function createadmin(){
    //     return view('registera');
    // }
    public function create(){
        return view('register');
    }

    // public function storeadmin(Request $request){
    //     $request->validate([
    //         'nama_admin' => ['required', 'alpha_num', 'string', 'min:3', 'max:20'],
    //         'nia' => ['required', 'string', 'size:9'],
    //         'mail_admin' => ['required', 'email'],
    //         'telp_admin' => ['required', 'string', 'min:11', 'max:13'],
    //         'pass' => ['required', 'min:3', 'max:255']
    //     ]);

    //     $admin = Admin::where('mail_admin', $request->mail_admin)->orWhere('telp_admin', $request->telp_admin)->orWhere('pass', $request->pass)->first();
    //     if($admin){
    //         return dd('user sudah ada tolong cari yang lain');
    //     }

    //     Admin::create([
    //         'nama_admin' => $request->nama_admin,
    //         'nia' => $request->nia,
    //         'telp_admin' => $request->telp_admin,
    //         'mail_admin' => $request->mail_admin,
    //         'pass' => Hash::make($request->pass)
    //     ]);

    //     session()->flash('sukses','terimakasih registasi anda berhasil');
    //     return redirect('/logina')->with('success', 'Pembayaran berhasil disimpan.');

    // }

    public function store(Request $request){
        $request->validate([
            'nama_mhs' => ['required', 'alpha_num', 'string', 'min:3', 'max:20'],
            'nim' => ['required', 'string', 'size:9'],
            'mail_mhs' => ['required', 'email'],
            'role' => ['required', 'in:admin,mahasiswa'],
            'telp_mhs' => ['required', 'string', 'min:11', 'max:13'],
            'password' => ['required', 'min:3', 'max:255']
        ]);

    $mahasiswa = Mahasiswa::where('mail_mhs', $request->mail_mhs)->orWhere('telp_mhs', $request->telp_mhs)->orWhere('password', $request->password)->first();
        if($mahasiswa){
            return dd('user sudah ada tolong cari yang lain');
        }


    Mahasiswa::create([
        'nama_mhs' => $request->nama_mhs,
        'nim' => $request->nim,
        'mail_mhs' => $request->mail_mhs,
        'role' => $request->role,
        'telp_mhs' => $request->telp_mhs,
        'password' => Hash::make($request->password)
    ]);

    session()->flash('sukses','terimakasih registasi anda berhasil');


    return redirect('/home')->with('success', 'Pembayaran berhasil disimpan.');

    }
}
