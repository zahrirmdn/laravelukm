<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Event;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $mahasiswas = Mahasiswa::all();
        return view('pesan', compact('mahasiswas'));

    }


    /**
     * Store a newly created pemesanan in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Validasi data input
    $validatedData = $request->validate([
        'tglpesan' => 'required|date',
        'total_pesanan' => 'required|numeric',
    ]);

    // Ambil nim dari pengguna yang sedang login dan tambahkan ke dalam data yang akan disimpan
    $validatedData['nim'] = auth()->user()->nim;

    // Simpan data pemesanan ke dalam tabel
    Pemesanan::create($validatedData);

    return redirect('/tiket')->with('success', 'Pemesanan berhasil disimpan.');
}



    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $pemesanan = Pemesanan::findOrFail($id);
    //     return view('pemesanan.edit', compact('pemesanan'));
    // }

    public function edit($id)
    {
        $pemesanan = DB::table('pemesanans')->where('id',$id)->first();
        return view('tampildatapesan', ['pemesanan' => $pemesanan]);
    }

    public function update(Request $request, $id)
    {

        DB::table('pemesanans')->where('id',$id)->update(['tglpesan' => $request->tglpesan, 'total_pesanan' => $request->total_pesanan]);
        return redirect('/pesan');
        // $validatedData = $request->validate([
        //     'tglpesan' => 'required|date',
        //     'total_pesanan' => 'required|numeric',
        // ]);

        // $pemesanans = Pemesanan::findOrFail($id);
        // $pemesanans->update($validatedData);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */


// ...

public function destroy(Request $request)
{
    $id = $request->input('id');
    $pesan = Pemesanan::findOrFail($id);

    // Mulai transaksi database
    DB::beginTransaction();

    try {
        // Hapus pembayaran terkait pemesanan
        $pesan->pembayarans()->delete();

        // Hapus tiket terkait pemesanan
        $pesan->tikets()->delete();

        // Hapus pemesanan
        $pesan->delete();

        // Commit transaksi jika semua berhasil
        DB::commit();

        return redirect('/pesan')->with('success', 'Pemesanan berhasil dihapus.');
    } catch (\Exception $e) {
        // Rollback transaksi jika terjadi kesalahan
        DB::rollBack();

        return redirect('/pesan')->with('error', 'Gagal menghapus pemesanan.');
    }
}

}
