@extends('layout.utama')

@section('hubung')
<title>Halaman User</title>

<div class="container text-center">
    <div class="row">
      <div class="col">
        <a href="https://youtu.be/Q1XofoHKifw">Perasaan saat masuk final sebuah lomba</a>
      </div>
      <div class="col">
        <a href="https://youtu.be/q3we3BDPU3E">Wajah-wajah kepengurusan baru</a>
      </div>
      <div class="col">
        <a href="https://youtube.com/shorts/3mWzhAn1GKI?feature=share">Bentuk dukungan ke sebuah organisasi</a>
      </div>
    </div>
  </div>

<div id="carouselExampleIndicators" class="carousel slide" style="margin-top: 100px">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="gambar/jalan.jpg" class="d-block w-10" alt="awal" width="80%" height="600px" style="margin-left: 100px">
      </div>
      <div class="carousel-item">
        <img src="gambar/FUTSAL.JPG" class="d-block w-10" alt="tengah" width="80%" height="600px" style="margin-left: 100px">
      </div>
      <div class="carousel-item">
        <img src="gambar/bareng.jpg" class="d-block w-10" alt="akhir" width="50%" height="600px" style="margin-left: 100px">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<div class="overflow-scroll" style="height: 200px; border: 1px solid black; margin-top: 50px">
    <p>
      Selamat datang di Website Resmi Kumpulan Sepak Bola!

      Kami dengan bangga mempersembahkan platform ini kepada Anda, para pecinta sepak bola sejati. Website ini didedikasikan untuk memberikan pengalaman yang tak terlupakan dalam menjelajahi dunia sepak bola.

      Di sini, Anda akan menemukan berbagai informasi terkini tentang kompetisi, tim, pemain, jadwal pertandingan, berita terbaru, dan banyak lagi. Kami berkomitmen untuk memberikan konten berkualitas tinggi yang menginformasikan, menghibur, dan memperdalam pengetahuan Anda tentang sepak bola.

      Melalui desain yang modern dan user-friendly, kami mengundang Anda untuk menjelajahi setiap halaman, mengeksplorasi beragam fitur, dan berinteraksi dengan sesama penggemar sepak bola. Dapatkan akses langsung ke video highlight, foto, dan statistik terbaru yang akan membuat Anda tetap terhubung dengan aksi di lapangan.

      Website resmi Kumpulan Sepak Bola juga menyediakan kesempatan bagi Anda untuk berpartisipasi secara aktif. Anda dapat memberikan komentar, berbagi pendapat, dan berinteraksi dengan komunitas kami. Kami percaya bahwa diskusi dan perspektif yang beragam akan memperkaya pengalaman sepak bola Anda.

      Terakhir, kami ingin mengucapkan terima kasih kepada seluruh pengunjung yang telah setia mendukung kami. Kami berharap Anda menikmati setiap momen yang kami hadirkan dan mendapatkan kepuasan maksimal dari kunjungan Anda di Website Resmi Kumpulan Sepak Bola.
        <br> <br>
      Salam sepak bola,
        <br> <br> <br>
      Tim Website Resmi Kumpulan Sepak Bola
    </p>
  </div>


@endsection
