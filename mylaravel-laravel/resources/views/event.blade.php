@extends('layout.utama')

@section('hubung')

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accordion Event</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  <style>
    .accordion-item {
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Event List</h1>

    <div class="accordion" id="accordionExample">
      @foreach ($events as $event)
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading{{ $event->id }}">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $event->id }}" aria-expanded="false" aria-controls="collapse{{ $event->id }}">
            {{ $event->nama_event }}
          </button>
        </h2>
        <div id="collapse{{ $event->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $event->id }}" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p>Tanggal Event: {{ $event->tgl_event }}</p>
            @if (auth()->check() && auth()->user()->role == "mahasiswa")
                <a href="/pesan">buy here</a>
            @endif
            {{-- <p>Deskripsi: {{ $event->deskripsi }}</p> --}}
            @if (auth()->check() && auth()->user()->role == "admin")
                <form action="/event/delete" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{ $event->id }}">
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                    <a href="/tampildataevent/{{ $event->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                </form>
            @endif
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  @if (auth()->check() && auth()->user()->role == "admin")
  <a href="/tambaevent" class="btn btn-sm btn-success" style="margin-left: 550px">new event</a>
  @endif

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

@endsection
