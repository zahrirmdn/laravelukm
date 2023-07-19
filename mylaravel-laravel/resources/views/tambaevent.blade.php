@extends('layout.utama')
@section('hubung')

<title>Halaman Tambah Event</title>

<h1>tambah Data Event</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="/tambaevent" method="post">

    <label for="nama_event">Nama Event:</label>
    <input type="text" name="nama_event" id="nama_event" required>
    <br><br>

    <label for="tgl_event">Tanggal Event:</label>
    <input type="datetime-local" name="tgl_event" id="tgl_event" required>
    <br><br>

    @csrf
    <button type="submit">Add</button>
</form>


@endsection
