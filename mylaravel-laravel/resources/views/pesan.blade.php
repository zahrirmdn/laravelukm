@extends('layout.utama')

@section('hubung')
<title>Halaman Pemesanan</title>

<h4 style="text-align: center; color: blueviolet">Dukung Unair</h4>

<!-- create.blade.php -->

<form action="/pesan" method="post">
    @csrf

    <label for="event" class="form-label">Event</label>
    <select class="form-select" name="event_id">
        <option selected disabled>Choose an event</option>
        @foreach ($events as $event)
            <option value="{{$event->id}}">{{$event->nama_event}}</option>
        @endforeach
    </select>

    <!-- Bagian lain dari formulir -->
    <div>
        <label for="tglpesan" style="text-align: center">Tanggal Pesan:</label>
        <input type="date" name="tglpesan" id="tglpesan">
        <label for="total_pesanan" style="text-align: center">Total Pesanan:</label>
        <input type="number" name="total_pesanan" id="total_pesanan" min="1" max="10">
        <label for="nim" style="text-align: center">NIM</label>
        <input type="hidden" name="nim" value="{{ auth()->user()->nim }}">
        <br>
        <button type="submit" style="text-align: center">Submit</button>
    </div>
</form>

<!-- pesan.blade.php -->

<table>
    <thead>
        <tr>
            <th style="margin-right: 50px">ID</th>
            <th style="margin-right: 50px">Tanggal Pesan</th>
            <th>Total Pesanan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pemesanans as $pesan)
            <tr>
                <td>{{ $pesan->id }}</td>
                <td>{{ $pesan->tglpesan }}</td>
                <td>{{ $pesan->total_pesanan }}</td>
                <td>{{ $pesan->mahasiswa_id }}</td>
                <td>
                    @if (auth()->user()->role=="mahasiswa")
                        <form action="/pesan/delete" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{ $pesan->id }}">
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                            <a href="/tampildatapesan/{{ $pesan->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
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
    <a href="/tiket" style="text-decoration: none; color: inherit;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-left: 750px" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
        </svg>
    </a>
</td>

@endsection
