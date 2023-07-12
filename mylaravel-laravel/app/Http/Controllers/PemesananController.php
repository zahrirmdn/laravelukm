<?php

namespace App\Http\Controllers;


use App\Models\pemesanan;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Store a newly created pemesanan in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  $events = DB::table('events')->get();
        //  $events = Event::all(); // Mengambil semua data event dari database
         return view('pemesanan/pesan', [
             'events' => Event::all()
         ]);
        // Validasi data yang diterima dari permintaan
        // $validatedData = $request->validate([
        //     'tglpesan' => 'required|date',
        //     'total_pesanan' => 'required|integer',
        // ]);

        // Membuat entri baru di tabel pemesanan
        // $pemesanan = pemesanan::create($validatedData);

        // // Mengembalikan respon sukses
        // return response()->json(['message' => 'Pemesanan berhasil dibuat', 'data' => $pemesanan], 201);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'tglpesan' => 'required|date',
        'total_pesanan' => 'required|numeric',
    ]);

    DB::table('pemesanans')->insert([
        'tglpesan' => $validatedData['tglpesan'],
        'total_pesanan' => $validatedData['total_pesanan'],
    ]);

    return redirect('/pemesanan/tiket')->with('success', 'Pemesanan berhasil disimpan.');
}


        // dd('submited');
    // Validasi input
    // $validatedData = $request->validate([
    //     'event_id' => 'required',
    //     'tglpesan' => 'required|date',
    //     'total_pesanan' => 'required|numeric',
    // ]);


    //     // Simpan data ke database
    //     Pemesanan::create($validatedData);

    //     // Redirect ke halaman lain setelah penyimpanan berhasil
    //     return redirect('/pemesanan')->with('success', 'Pemesanan berhasil disimpan.');



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
