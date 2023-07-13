<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tikets = Tiket::all();
        return view('tiket.index', compact('tikets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pemesanans = Pemesanan::all();
        return view('tiket.index', compact('pemesanans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis_tiket' => 'required|string|in:vip,vvip',
            'harga' => 'required|numeric',
            'nama_tiket' => 'required|string',
            'event_id' => 'required|integer|exists:pemesanans,id',
            'pemesanan_id' => 'required|integer|exists:pemesanans,id',
        ]);

        Tiket::create($validatedData);

        return redirect('/tiket')->with('success', 'Tiket berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $tiket = Tiket::findOrFail($id);
        // return view('tiket.show', compact('tiket'));
    }

    // Other methods: update(), destroy(), etc.
}
