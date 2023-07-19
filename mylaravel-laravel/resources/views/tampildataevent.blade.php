@extends('layout.utama')
@section('hubung')

<title>Halaman Tampil Event</title>

<h1>Data Event</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="/tampildataevent/{{ $event->id }}" method="post">
    @csrf
    @method('put')

    <label for="tgl_event">Tanggal Event:</label>
    <input type="datetime-local" name="tgl_event" id="tgl_event" value="{{ $event->tgl_event }}" required>
    <br><br>

    <button type="submit">Update</button>
</form>


@endsection
