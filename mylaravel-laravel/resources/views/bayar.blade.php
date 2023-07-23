@extends('layout.utama')

@section('hubung')
    <h1>List of Pembayaran</h1>

    <form action="/bayar" method="post">

        @csrf

        <h2>hai</h2>

        <input class="form-control" type="date" placeholder="Tanggal berapa?" name="tgl_pembayaran">
        <br>
        <div>
            <label for="total_bayar_input">Total Bayar</label>
            <input type="text" id="total_bayar_input" name="total_bayar" readonly>
        </div>
        {{-- <div>
            <label for="jenis_tiket">Jenis Tiket</label>
            <select id="jenis_tiket" name="jenis_tiket">
                <option value="vip">VIP</option>
                <option value="vvip">VVIP</option>
            </select>
        </div> --}}
        {{-- <div>
            <label for="jumlah_tiket">Jumlah Tiket</label>
            <input class="form-control form-control-sm" type="number" placeholder="Jumlah tiket" name="jumlah_tiket" id="jumlah_tiket">
        </div> --}}
        <br>
        <input class="form-control form-control-sm" type="number" placeholder="pemesanan id berapa?" name="pemesanan_id">
        <br>
        <input class="form-control form-control-sm" type="number" placeholder="tiket id berapa" name="tiket_id">
        <button type="submit" style="text-align: center">Submit</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>tanggal bayar</th>
                <th>total bayar</th>
                <th>pemesanan id</th>
                <th>tiket id</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembayarans as $pembayaran)
                <tr>
                    <td>{{ $pembayaran->id }}</td>
                    <td>{{ $pembayaran->tgl_pembayaran }}</td>
                    <td>{{ $pembayaran->total_bayar }}</td>
                    <td>{{ $pembayaran->pemesanan_id }}</td>
                    <td>{{ $pembayaran->tiket_id }}</td>
                    <td>
                        @if (auth()->user()->role=="mahasiswa")
                            <form action="/bayar/delete" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $pembayaran->id }}">
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                <a href="/tampildatabayar/{{ $pembayaran->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <td>
        <a href="/tiket" style="text-decoration: none; color: inherit;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin-left: 750px" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
            </svg>
        </a>
        <a href="/home" style="text-decoration: none; color: inherit;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-left: 750px" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
            </svg>
        </a>
    </td>
    <script>
        // Function untuk menghitung total bayar
        function hitungTotalBayar() {
            var jenisTiket = document.getElementById('jenis_tiket').value;
            var jumlahTiket = document.getElementById('jumlah_tiket').value;

            // Harga tiket berdasarkan jenis tiket
            var harga = (jenisTiket === 'vip') ? 250 : 500;

            // Hitung total bayar
            var totalBayar = harga * jumlahTiket;

            // Tampilkan total bayar pada input
            document.getElementById('total_bayar_input').value = totalBayar;
        }

        // Panggil function hitungTotalBayar saat halaman pertama kali dimuat
        hitungTotalBayar();

        // Panggil function hitungTotalBayar saat ada perubahan pada pilihan jumlah tiket atau jenis tiket
        document.getElementById('jenis_tiket').addEventListener('change', hitungTotalBayar);
        document.getElementById('jumlah_tiket').addEventListener('change', hitungTotalBayar);
    </script>
@endsection
