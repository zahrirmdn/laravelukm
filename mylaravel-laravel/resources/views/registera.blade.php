
<title>Halaman Regristasi</title>

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card card-header">Create New Account</div>
            <div class="card-body">
                <form action="{{ route('registera') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="nama_admin" class="form-label">Username</label>
                        <input type="text" name="nama_admin" id="nama_admin" class="form-control">
                        @error("nama_admin")
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for='"telp_admin"' class="form-label">Telp</label>
                        <input type="text" name="telp_admin" id="telp_admin" class="form-control">
                        @error("telp_admin")
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="pass" class="form-label">Password</label>
                        <input type="password" name="pass" id="pass" class="form-control">
                        @error("pass")
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">save</button>
                </form>
            </div>
        </div>
    </div>
</div>


