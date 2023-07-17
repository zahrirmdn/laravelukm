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
        <button type="submit" style="text-align: center">Submit</button>
    </div>
</form>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tanggal Pesan</th>
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
                <td>
                    <form action="/pesan/delete" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{ $pesan->id }}">
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                        <a href="/tampildatapesan/{{ $pesan->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
