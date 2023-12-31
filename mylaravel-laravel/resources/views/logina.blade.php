<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="gaya/style-login.css">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            padding: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        .card {
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .mb-4 {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0069d9;
        }

        .text-danger {
            color: #dc3545;
        }
    </style>
    <title>Login Ukm</title>
</head>
<body>
<main>
    <h2>halo</h2>
    <header>
        <img src="gambar/unair_horizontal.png" alt="Unair logo">
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card card-header">Login Your Account</div>
                <div class="card-body">
                    <form action="{{ route('logina') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="nama_admin" class="form-label">Username</label>
                            <input type="text" name="nama_admin" id="nama_admin" value="{{ old("nama_admin") }}" class="form-control">
                            @error("nama_admin")
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
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>

</body>
</html>
