@extends('layout.utama')

@section('hubung')
<title>Halaman Tampil Bayar</title>

<h1>Data Bayar</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="/tampildatabayar/{{ $pembayaran->id }}" method="post">
    @csrf
    @method('put')

    <label for="tgl_pembayaran">Tanggal Pembayaran:</label>
    <input type="date" name="tgl_pembayaran" id="tgl_pembayaran" value="{{ $pembayaran->tgl_pembayaran }}" required>
    <br><br>

    <label for="total_pesanan">Total Bayar:</label>
    <input type="number" name="total_bayar" id="total_bayar" value="{{ $pembayaran->total_bayar }}" required>
    <br>

    <button type="submit">Update</button>
</form>


@endsection
