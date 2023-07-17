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
        return view('tiket', compact('tikets'));
    }

    /**
 * Show the form for creating a new resource.
 */
public function create()
{
    $pemesanans = Pemesanan::all();
    return view('tiket', compact('pemesanans'));
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
            'event_id' => 'required|integer|exists:events,id',
            'pemesanan_id' => 'required|integer|exists:pemesanans,id',
        ]);

        Tiket::create($validatedData);

        return redirect('/bayar')->with('success', 'Tiket berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function edit($id)
    {
        $tiket = DB::table('tikets')->where('id',$id)->first();
        return view('tampildatatiket', ['tiket' => $tiket]);
    }

    public function update(Request $request, $id)
    {

        DB::table('tikets')->where('id',$id)->update(['jenis_tiket' => $request->jenis_tiket, 'harga' => $request->harga, 'nama_tiket' => $request->nama_tiket]);
        return redirect('/tiket');

    }


    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $tiket = Tiket::findOrFail($id);

        $tiket->delete();

        return redirect('/tiket')->with('success', 'Tiket berhasil dihapus.');
    }
}
