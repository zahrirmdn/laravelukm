<!-- resources/views/tiket/index.blade.php -->

@extends('layout.utama')

@section('hubung')
    <h1>List of Pembayaran</h1>

    <form action="/bayar" method="post">

        @csrf

        <h2>hai</h2>

        <input class="form-control" type="date" placeholder="Tanggal berapa?" name="tgl_pembayaran">
        <br>
        <input class="form-control form-control-sm" type="number" placeholder="uangmu" name="total_bayar">
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
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
