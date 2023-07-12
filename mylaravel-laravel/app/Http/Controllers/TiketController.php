<?php

namespace App\Http\Controllers;

use App\Models\pemesanan;
use App\Models\tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tiket', [
            'tikets' => Tiket::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'jenis_tiket' => 'required|string|in:vip,vvip',
            'harga' => 'required|numeric',
            'nama_tiket' => 'required|string',
            'event_id' => 'required|integer',
            'pemesanan_id' => 'required|integer',
        ]);

        $tiket = Tiket::create($validateData);
        $pemesanan = Pemesanan::findOrFail($validateData['pemesanan_id']);
        $pemesanan->tikets()->save($tiket);

        // DB::table('tikets')->insert([
        //     'jenis_tiket' => $validateData['jenis_tiket'],
        //     'harga' => $validateData['harga'],
        //     'nama_tiket' => $validateData['nama_tiket'],
        //     'event_id' => $validateData['event_id'],
        //     'pemesanan_id' => $validateData['pemesanan_id']
        // ]);

        return redirect('/bayar')->with('success', 'Pemesanan berhasil disimpan.');
        // dd($request->all());
        // DB::table('tikets')->insert([
        //     'jenis_tiket' => $request->jenis_tiket,
        //     'harga' => $request->harga,
        //     'nama_tiket' => $request->nama_tiket,
        //     'event_id' => $request->event_id,
        //     'pemesanan_id' => $request->pemesanan_id
        // ]);

        // return redirect('/pemesanan/bayar')->with('success', 'Pemesanan berhasil disimpan.');
        // return redirect()->route('pemesanan.bayar')->with('success', 'Pemesanan berhasil disimpan.');

        // dd($request->id());
    }

    /**
     * Display the specified resource.
     */
    public function show(tiket $tiket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tiket $tiket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tiket $tiket)
    {
        //
    }
}