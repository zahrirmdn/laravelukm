<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Event;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Show the form for creating a new pemesanan.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $pemesanans = Pemesanan::all();
    return view('pesan', [
        'events' => Event::all(),
        'pemesanans' => $pemesanans
    ]);
}


    /**
     * Store a newly created pemesanan in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tglpesan' => 'required|date',
            'total_pesanan' => 'required|numeric',
        ]);

        Pemesanan::create($validatedData);

        return redirect('/tiket')->with('success', 'Pemesanan berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $pesan = Pemesanan::findOrFail($id);
        $pesan->delete();

        return redirect('/pesan')->with('success', 'Pemesanan berhasil dihapus.');
    }
}
