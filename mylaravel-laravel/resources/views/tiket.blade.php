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
                                <td>
                                    <a href="/pesan" style="text-decoration: none; color: inherit;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin-left: 750px" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                            <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
                                        </svg>
                                    </a>
                                    <a href="/bayar" style="text-decoration: none; color: inherit;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-left: 750px" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                        </svg>
                                    </a>
                                </td>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


