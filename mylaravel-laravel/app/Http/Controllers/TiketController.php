<?php

namespace App\Http\Controllers;

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
        return view('pemesanan.tiket');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        DB::table('tikets')->insert([
            'jenis_tiket' => $request->jenis_tiket,
            'harga' => $request->harga,
            'nama_tiket' => $request->nama_tiket,
            'event_id' => $request->event_id,
            'pemesanan_id' => $request->pemesanan_id
        ]);

        return redirect('/pembayaran/bayar')->with('success', 'Pemesanan berhasil disimpan.');
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
