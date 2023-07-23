<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use App\Models\Pemesanan;
use App\Models\Event;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $events = Event::all(); // Mengambil semua data event dari database
    $tikets = Tiket::all(); // Mengambil semua data tiket dari database

    return view('/tiket', compact('events', 'tikets'));
}

    /**
 * Show the form for creating a new resource.
 */
public function create()
{
    $pemesanans = Pemesanan::all(); // kalau dia menerima pasto ada gini
    return view('tiket', compact('pemesanans'));

    $tikets = Tiket::all(); // kalau dia menerima pasto ada gini
    return view('tiket', compact('tikets'));
}


    /**
     * Store a newly created resource in storage.
     */
    /**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    // Validasi data yang dikirim dari form
    $request->validate([
        'jenis_tiket' => ['required', 'in:vip,vvip'], // Hanya menerima vip atau vvip
        'nama_tiket' => ['required', 'string', 'max:255'],
        'event_id' => ['required', 'numeric'],
        'pemesanan_id' => ['required', 'numeric', 'exists:pemesanans,id'], // Pastikan nilai pemesanan_id ada di tabel pemesanans
    ]);

    // Hitung total bayar berdasarkan jenis tiket dan jumlah tiket
    $hargaTiket = ($request->jenis_tiket === 'vip') ? 250 : 500;
    $totalBayar = $hargaTiket * $request->jumlah_tiket;

    // Simpan data tiket ke dalam database menggunakan model Eloquent
    Tiket::create([
        'jenis_tiket' => $request->jenis_tiket,
        'nama_tiket' => $request->nama_tiket,
        'event_id' => $request->event_id,
        'pemesanan_id' => $request->pemesanan_id,
        'total_bayar' => $totalBayar, // Simpan total bayar ke dalam database
    ]);

    // Redirect ke halaman lain setelah berhasil menyimpan data
    return redirect('/bayar')->with('success', 'Tiket berhasil ditambahkan!');
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

        // Hapus semua pembayaran terkait tiket
        Pembayaran::where('tiket_id', $id)->delete();

        // Hapus tiket terkait
        $tiket->delete();

        return redirect('/tiket')->with('success', 'Tiket berhasil dihapus.');
    }
}
