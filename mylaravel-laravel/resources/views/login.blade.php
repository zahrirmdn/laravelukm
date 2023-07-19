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
    <title>Login Ukm</title>
</head>
<body>
<main>
    <header>
        <div class="logo">
            <img src="gambar/logo_UKM_Sepakbola.png" alt="UKM logo">
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card card-header">Login Your Account</div>
                <div class="card-body">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="mail_mhs" class="form-label">Email</label>
                            <input type="text" name="mail_mhs" id="mail_mhs" value="{{ old('mail_mhs') }}" class="form-control">
                            @error("mail_mhs")
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
                        <div class="create">
                            <button type="submit" class="btn btn-primary">Login</button>
                                <div class="account">
                                    <a href="/register" style="margin-left: 500px"><br>Create Account</a>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>

</body>
</html>
