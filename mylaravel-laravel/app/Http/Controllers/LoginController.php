<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mail_mhs' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('mail_mhs', 'password');

        if (Auth::guard('mahasiswa')->attempt($credentials)) {
            // Jika autentikasi berhasil, alihkan ke halaman yang sesuai
            return redirect('/home')->with('success', 'Anda berhasil login.');
        } else {
            // Jika autentikasi gagal, alihkan kembali ke halaman login
            throw ValidationException::withMessages([
                'mail_mhs' => 'Email atau password salah.',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('mahasiswa')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/home');
    }
}
