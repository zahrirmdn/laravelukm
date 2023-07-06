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
        <img src="gambar/unair_horizontal.png" alt="Unair logo">
    </header>
    <!--TODO 1 : Ubah div menjadi form-->
    <form id="loginForm" class="login-input">
        <label for="inputEmail">Email</label>
        <!--TODO 2 : Ubah type menjadi emai.-->
        <input id="inputEmail" type="email" required>
        <label for="inputPassword">Password</label>
        <!--Ubah type menjadi password-->
        <input id="inputPassword" type="password" required>
        <!--TODO 4: Tambah type submit pada button login-->
        <button id="buttonLogin" type="submit">Login</button>
    </form>
</main>
<div id="modal" class="pop-up-modal">
    <h2>Login gagal!</h2>
    <p>Silakan coba lagi</p>
</div>

<script src="js/_init.js"></script>
<script src="js/login-script.js"></script>
</body>
</html>
