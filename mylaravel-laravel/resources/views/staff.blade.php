@extends('layout.utama')

@section('hubung')
    <title>Halaman staff</title>


    <div class="row">
        @foreach ($admins as $index => $admin)
            <div class="col-md-4">
                <ul>
                    {{-- <li>{{$admin->nama_admin}}</li>
                    <li>{{$admin->telp_admin}}</li> --}}
                    <div class="card" style="width: 14rem;">
                        <img src="https://th.bing.com/th?id=OIP.OK1IsqjpOAbaSUXC1gYx1wHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.5&pid=3.1&rm=2" class="card-img-top" alt="Placeholder Image">
                        <div class="card-body">
                            <h5 class="card-title">{{$admin->nama_admin}}</h5>
                            <p class="card-text">{{$admin->telp_admin}}</p>
                            <a href="https://cybercampus.unair.ac.id/foto_mhs/434221027" class="btn btn-primary">see picture and change the last 2 number</a>
                        </div>
                    </div>
                </ul>
            </div>

            @if (($index + 1) % 3 == 0)
                <div class="row">
            @endif
        @endforeach
    </div>
</div>

@endsection
