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
  <div class="awak">
    <nav class="navbar navbar-expand-lg bg-body-danger bg-success">
        <div class="gambar">
            <img src="gambar/ukmsepak.jpeg" alt="ukm" width="40" height="40" ml="10px">
        </div>
        <div class="container">
            <a class="navbar-brand" href='/home'>UKMSB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href='/event'>Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='/achv'>Achievement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/pesan') }}">get your ticket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='/staff'>Our staff</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="hubung">
        @yield('hubung')
    </div>
  </div>

  <footer class="foter">
      <div class="kiri">
          <div class="garis"></div>
          <div class="garisdua"></div>
          <img src="gambar/ukmsepak.jpeg" alt="uk" width="100" height="100">
          <p>Universitas Airlangga</p>
          <p>UKM Sepak Bola 1981</p>
          <p>MERR road</p>
          <p>Surabaya</p>
      </div>
      <div class="tengah">
          <h4>contact us</h4>
          <ul>
              <li>
                  <a href="https://api.whatsapp.com/send?phone=6281333774462"><img src="https://th.bing.com/th/id/OIP.4j1VYOSBnuF76aeRShN9gwHaEK?w=281&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="uwa" width="30" height="30"> WA</a>
              </li>
          </ul>
          <ul>
              <li>
                  <a href="https://www.instagram.com/ukmsepakbolaunair/"><img src="https://th.bing.com/th/id/OIP.5vtA56RINio-niUcMEjNjAAAAA?w=180&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="" width="30px" height="30px"> IG</a>
              </li>
          </ul>
          <ul>
              <li>
                  <a href="sepakbola@ukm.unair.ac.id <sepakbola@ukm.unair.ac.id>;"><img src="https://th.bing.com/th/id/OIP.maQpAvvefcyHpENp4K-xEAHaHb?w=156&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="" width="30" height="30"> EMAIL</a>
              </li>
          </ul>
      </div>
      <div class="kanan">
          <p class="tutup">Hak Cipta &copy; 2023 Website UNIT KEGIATAN MAHASISWA SEPAK BOLA UNIVERSITAS AIRLANGGA</p>
      </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
