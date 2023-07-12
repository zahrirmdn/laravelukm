<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    public function index(){
        $admins = DB::table('admins')->get();
        return view('staff', compact('admins'));
    }
}
