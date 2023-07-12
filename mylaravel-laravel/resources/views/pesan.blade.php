@extends('layout.utama')

@section('hubung')
<title>Halaman Pemesanan</title>

<h4 style="text-align: center; color: blueviolet">Dukung Unair</h4>

<!-- create.blade.php -->

<form action="/pemesanan" method="post">
    @csrf

    {{-- @foreach ($events as $event) --}}
    <label for="event" class="form-label">Event</label>
    <select class="form-select" name="event_id">
        <option selected>Open this select menu</option>
        @foreach ($events as $event)
            <option value="{{$event->id}}">{{$event->nama_event}}</option>
        @endforeach
    </select>
    {{-- @endforeach --}}

    <!-- Bagian lain dari formulir -->

    <div>
        <label for="tglpesan" style="text-align: center">Tanggal Pesan:</label>
        <input type="date" name="tglpesan" id="tglpesan">
        <label for="total_pesanan" style="text-align: center">Total Pesanan:</label>
        <input type="number" name="total_pesanan" id="total_pesanan" min="1" max="10">
        <button type="submit" style="text-align: center">Submit</button>
    </div>


</form>
@endsection
