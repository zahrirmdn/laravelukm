<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Regristasi</title>
    <link rel="stylesheet" href="gaya/style-registerasi.css">
    <style>
            body {
            margin: 0;
            padding: 0;
            background-image: url('gambar/ukmsepak.jpeg');
            background-size: contain;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card card-header" style="background-color: cornflowerblue">Create New Account</div>
            <div class="card-body">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="nama_mhs" class="form-label" style="background-color: whitesmoke">Username</label>
                        <input type="text" name="nama_mhs" id="nama_mhs" class="form-control">
                        @error("nama_mhs")
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="nim" class="form-label" style="background-color: whitesmoke">NIM</label>
                        <input type="text" name="nim" id="nim" class="form-control">
                        @error("nim")
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="mail_mhs" class="form-label" style="background-color: whitesmoke">Email</label>
                        <input type="text" name="mail_mhs" id="mail_mhs" class="form-control">
                        @error("mail_mhs")
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="role" class="form-label" style="background-color: whitesmoke">Role</label>
                        <select name="role" id="role" class="form-select">
                            <option value="mahasiswa">Mahasiswa</option>
                            <option value="admin">Admin</option>
                        </select>
                        @error("role")
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="telp_mhs" class="form-label" style="background-color: whitesmoke">Telp</label>
                        <input type="text" name="telp_mhs" id="telp_mhs" class="form-control">
                        @error("telp_mhs")
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label" style="background-color: whitesmoke">Password</label>
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

