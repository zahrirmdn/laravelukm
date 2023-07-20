<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class StaffController extends Controller
{
    // public function index(){
    //     $admins = DB::table('admins')->get();
    //     return view('staff', compact('admins'));
    // }
    public function index()
    {
        $mahasiswas = Mahasiswa::where('role', 'admin')->get();
        return view('staff', compact('mahasiswas'));
    }
}
