<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Regristasi</title>
    <link rel="stylesheet" href="gaya/style-registerasi.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card card-header">Create New Account</div>
            <div class="card-body">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="nama_mhs" class="form-label">Username</label>
                        <input type="text" name="nama_mhs" id="nama_mhs" class="form-control">
                        @error("nama_mhs")
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" name="nim" id="nim" class="form-control">
                        @error("nim")
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="mail_mhs" class="form-label">Email</label>
                        <input type="text" name="mail_mhs" id="mail_mhs" class="form-control">
                        @error("mail_mhs")
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="role" class="form-label">Role</label>
                        <select name="role" id="role" class="form-select">
                            <option value="mhs">Mahasiswa</option>
                            <option value="admin">Admin</option>
                        </select>
                        @error("role")
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="telp_mhs" class="form-label">Telp</label>
                        <input type="text" name="telp_mhs" id="telp_mhs" class="form-control">
                        @error("telp_mhs")
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        @error("password")
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

