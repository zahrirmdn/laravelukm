@extends('layout.utama')

@section('hubung')
<title>Halaman Tampil Tiket</title>

<h1>Data Tiket</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="/tampildatatiket/{{ $tiket->id }}" method="post">
    @csrf
    @method('put')

    <label for="tglpesan">Jenis Tiket:</label>
    <input type="enum" name="jenis_tiket" id="jenis_tiket" value="{{ $tiket->jenis_tiket }}" required>
    <br><br>

    <label for="total_pesanan">Harga:</label>
    <input type="number" name="harga" id="harga" value="{{ $tiket->harga }}" required>
    <br>
    <label for="total_pesanan">Nama Tiket:</label>
    <input type="text" name="nama_tiket" id="nama_tiket" value="{{ $tiket->nama_tiket }}" required>
    <br>

    <button type="submit">Update</button>
</form>


@endsection
