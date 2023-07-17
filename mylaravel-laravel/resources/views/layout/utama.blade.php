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
</head>
<body>
    <header class="header">
        <div class="header-logo">
        <img src="gambar/logo_UKM_SepakBola.png" alt="Chelsea FC Logo">
        <h1>UKM Sepak Bola<br>Universitas Airlangga</h1>
        </div>
    <nav class="header-navigation">
        <a href="/home">Home</a>
        <a href="/event">Event</a>
        <a href="/achv">Achievement</a>
        <a href="{{ url('/pesan') }}">Get Your Ticket</a>
        <a href="/staff">Our Staff</a>
        <a class="nav-link" href="{{ route('register') }}">Daftar </a>
        <a class="nav-link" href="{{ route('registera') }}"> admin</a>
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
          <li><a href="#">Home</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">Fixtures</a></li>
          <li><a href="#">Results</a></li>
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
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
