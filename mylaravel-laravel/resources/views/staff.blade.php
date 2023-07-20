@extends('layout.utama')

@section('hubung')
<title>Halaman staff</title>

<div class="edit">
    <div class="row">
        @foreach ($mahasiswas as $index => $mahasiswa)
            @if ($mahasiswa->role === 'admin')
                <div class="col-md-2">
                    <ul>
                        <div class="card" style="width: 14rem;">
                            <img src="https://th.bing.com/th?id=OIP.OK1IsqjpOAbaSUXC1gYx1wHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.5&pid=3.1&rm=2" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $mahasiswa->nama_mhs }}</h5>
                                <p class="card-text">{{ $mahasiswa->telp_mhs }}</p>
                                <a href="https://cybercampus.unair.ac.id/foto_mhs/43{{ substr($mahasiswa->nim, 2) }}" class="btn btn-primary">see picture and change the last 2 number</a>
                            </div>
                        </div>
                    </ul>
                </div>
            @endif

            @if (($index + 1) % 3 == 0)
                </div><div class="row">
            @endif
        @endforeach
    </div>
</div>
@endsection
