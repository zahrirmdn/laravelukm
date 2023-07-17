@extends('layout.utama')

@section('hubung')
<title>Halaman Tampil Pesan</title>

<h1>Data Pesan</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="/tampildatapesan/{{ $pemesanan->id }}" method="post">
    @csrf
    @method('put')

    <label for="tglpesan">Tanggal Pesan:</label>
    <input type="date" name="tglpesan" id="tglpesan" value="{{ $pemesanan->tglpesan }}" required>
    <br><br>

    <label for="total_pesanan">Total Pesanan:</label>
    <input type="number" name="total_pesanan" id="total_pesanan" value="{{ $pemesanan->total_pesanan }}" min="1" max="10" required>
    <br>

    <button type="submit">Update</button>
</form>


@endsection
