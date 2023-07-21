<?php

use Illuminate\Support\Facades\Auth;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="gaya/style-utama.css">
    <link rel="stylesheet" href="gaya/style-home.css">
    <link rel="stylesheet" href="gaya/style-achv.css">
    <link rel="stylesheet" href="gaya/style-staff.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" />
    <style>
            .header-navigation {
            display: flex;
            justify-content: space-between;
        }

        .navbar {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .navbar.kiri li {
            margin-right: 10px;
        }

        .navbar.kanan li {
            margin-left: 10px;
        }

        .navbar li:last-child {
            margin-right: 0;
        }

    </style>
</head>
<body>
    <header class="header">
        <div class="header-logo">
            <a href="/home"><img src="gambar/logo_UKM_SepakBola.png" alt="UKMSB"></a>
            <h1>UKM Sepak Bola<br>Universitas Airlangga</h1>
        </div>
        <nav class="header-navigation">
            <ul class="navbar kiri">
                <li>
                    <a href="/home">Home</a>
                </li>
                <li>
                    <a href="/event">Event</a>
                </li>
                <li>
                    <a href="/achv">Achievement</a>
                </li>
                <li>
                    <a href="{{ url('/pesan') }}">Get Your Ticket</a>
                </li>
                <li>
                    <a href="/staff">Our Staff</a>
                </li>
            </ul>
            <div class="navbar">
                <ul class="navbar kanan">
                    @guest <!-- Jika pengguna belum login -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Sign in</a>
                        </li>
                    @else <!-- Jika pengguna sudah login -->
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->nama_mhs }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bibi-box-arrow-right"></i>Log out</button>
                                </form>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </header>
    <div class="hubung">
        @yield('hubung')
    </div>
  </div>

  <footer>
    <div class="footer-container">
      <div class="footer-column">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="/home">Home</a></li>
          <li><a href="/event">Event</a></li>
          <li><a href="/achv">Achievement</a></li>
          <li><a href="/tiket">Ticket</a></li>
        </ul>
      </div>
      <div class="footer-column">
        <h4>Contact</h4>
        <ul>
          <li>Email: info@ukmsbunair.com</li>
          <li>Phone: +62 812 3456 7890</li>
          <li>Address: 123 Merr Street, Surabaya</li>
        </ul>
      </div>
      <div class="footer-column">
        <h4>Follow Us</h4>
        <ul class="social-icons">
          <li><a href="https://www.instagram.com/ukmsepakbolaunair/?hl=id"><img src="gambar/instagram.png" alt="ig"></a></li>
          <li><a href="https://www.youtube.com/@ukmsepakbolaunair5613"><img src="gambar/youtube.png" alt="youtube"></a></li>
          <li><a href="#"><img src="gambar/facebook.png" alt="fb"></a></li>
          <li><a href="#"><img src="gambar/twitter.png" alt="twitter"></a></li>
        </ul>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
