<!-- resources/views/tiket/index.blade.php -->

@extends('layout.utama')

@section('hubung')
    <h1>List of Tikets</h1>

    <form action="/tiket" method="post">
        @csrf
        <h2>hai</h2>
        <input class="form-control form-control-lg" type="enum" placeholder="vip/vvip" name="jenis_tiket">
        <br>
        <input class="form-control" type="number" placeholder="T:50/F:100" name="harga">
        <br>
        <input class="form-control form-control-sm" type="text" placeholder="atas nama" name="nama_tiket">
        <br>
        <input class="form-control form-control-sm" type="text" placeholder="event id" name="event_id">
        <br>
        <input class="form-control form-control-sm" type="text" placeholder="pemesanan id" name="pemesanan_id">
        {{-- <label for="pemesanan_id">Pemesanan ID:</label>
        <select class="form-select form-control-sm" name="pemesanan_id">
            @foreach ($pemesanans as $pesan)
                <option value="{{ $pesan->id }}">{{ $pesan->id }}</option>
            @endforeach
        </select> --}}

        <br>
        <button type="submit" style="text-align: center">Submit</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Jenis Tiket</th>
                <th>Harga</th>
                <th>Nama Tiket</th>
                <th>Pemesanan ID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tikets as $tiket)
                <tr>
                    <td>{{ $tiket->id }}</td>
                    <td>{{ $tiket->jenis_tiket }}</td>
                    <td>{{ $tiket->harga }}</td>
                    <td>{{ $tiket->nama_tiket }}</td>
                    <td>{{ $tiket->pemesanan_id }}</td>
                    <td>
                        @if (auth()->user()->role=="mahasiswa")
                            <form action="/tiket/delete" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $tiket->id }}">
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                <a href="/tampildatatiket/{{ $tiket->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


