<?php

namespace App\Http\Controllers;

use App\Models\pembayaran;
use App\Models\Pemesanan;
use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        pembayaran::create($validatedData);

        return redirect('/home')->with('success', 'Pembayaran berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function edit($id)
    {
        $pembayaran = DB::table('pembayarans')->where('id',$id)->first();
        return view('tampildatabayar', ['pembayaran' => $pembayaran]);
    }

    public function update(Request $request, $id)
    {

        DB::table('pembayarans')->where('id',$id)->update(['tgl_pembayaran' => $request->tgl_pembayaran, 'total_bayar' => $request->total_bayar]);
        return redirect('/bayar');
    }


    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $pembayaran = pembayaran::findOrFail($id);

        // Menghapus terlebih dahulu entri Tiket terkait
        $tiket = Tiket::find($pembayaran->tiket_id);
        if ($tiket) {
            $tiket->delete();
        }

        // Menghapus entri Pemesanan terkait
        $pemesanan = Pemesanan::find($pembayaran->pemesanan_id);
        if ($pemesanan) {
            $pemesanan->delete();
        }

        // Menghapus entri Pembayaran
        $pembayaran->delete();

        return redirect('/bayar')->with('success', 'Pembayaran berhasil dihapus.');
    }
}
