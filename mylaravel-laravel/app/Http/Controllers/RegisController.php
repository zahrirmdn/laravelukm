<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Mahasiswa;

class RegisController extends Controller
{
    public function create(){
        return view('register');
    }

    public function store(Request $request){
        $request->validate([
            'nama_mhs' => ['required', 'alpha_num', 'string', 'min:3', 'max:20'],
            'nim' => ['required', 'string', 'size:9'],
            'mail_mhs' => ['required', 'email'],
            'telp_mhs' => ['required', 'string', 'min:11', 'max:13'],
            'password' => ['required', 'min:3', 'max:255']
        ]);

    Mahasiswa::create([
        'nama_mhs' => $request->nama_mhs,
        'nim' => $request->nim,
        'mail_mhs' => $request->mail_mhs,
        'telp_mhs' => $request->telp_mhs,
        'password' => Hash::make($request->password)
    ]);

    }
}
