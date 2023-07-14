<?php

namespace App\Http\Controllers;

use App\Models\pembayaran;
use App\Models\pemesanan;
use App\Models\Tiket;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembayarans = pembayaran::all();
        return view('bayar', compact('pembayarans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pemesanans = Pemesanan::all();
        return view('bayar', compact('pemesanans'));

        $tikets = Tiket::all();
        return view('bayar', compact('tikets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tgl_pembayaran' => 'required|date',
            'total_bayar' => 'required|integer',
            'pemesanan_id' => 'required|integer|exists:pemesanans,id',
            'tiket_id' => 'required|integer|exists:pemesanans,id',
        ]);

        Pembayaran::create($validatedData);

        return redirect('/home')->with('success', 'Pembayaran berhasil disimpan.');
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
