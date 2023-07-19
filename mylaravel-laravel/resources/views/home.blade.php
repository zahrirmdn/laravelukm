@extends('layout.utama')

@section('hubung')
<title>Halaman User</title>

@if (session()->has('sukses'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('sukses') }}
    </div>
@endif
<div class="hero-section">
    <h1>Welcome to Our Football Club</h1>
    <p>Experience the thrill of the game with us</p>
    @guest
        <a href="/login" class="cta-button">Login</a>
    @endguest
</div>
<div class="content-section">
    <div class="container">
        <h2>About Us</h2>
        <div class="row">
            <div class="col-md-3">
                <img src="gambar/hzw.jpg" alt="Hamid Zuhdi", height="100">
            </div>
            <div class="col-md-9">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
                    <h4 id="scrollspyHeading1">Ketua UKMSB</h4>
                    <p>Selamat datang di Website Resmi Kumpulan Sepak Bola! Kami dengan bangga mempersembahkan platform ini kepada Anda, para pecinta sepak bola sejati.</p>
                    <p>Website ini didedikasikan untuk memberikan pengalaman yang tak terlupakan dalam menjelajahi dunia sepak bola. Di sini, Anda akan menemukan berbagai informasi terkini tentang kompetisi, tim, pemain, jadwal pertandingan, berita terbaru, dan banyak lagi.</p>
                    <p>Kami berkomitmen untuk memberikan konten berkualitas tinggi yang menginformasikan, menghibur, dan memperdalam pengetahuan Anda tentang sepak bola. Melalui desain yang modern dan user-friendly, kami mengundang Anda untuk menjelajahi setiap halaman, mengeksplorasi beragam fitur, dan berinteraksi dengan sesama penggemar sepak bola.</p>
                    <p>Dapatkan akses langsung ke video highlight, foto, dan statistik terbaru yang akan membuat Anda tetap terhubung dengan aksi di lapangan. Website resmi Kumpulan Sepak Bola juga menyediakan kesempatan bagi Anda untuk berpartisipasi secara aktif. Anda dapat memberikan komentar, berbagi pendapat, dan berinteraksi dengan komunitas kami. Kami percaya bahwa diskusi dan perspektif yang beragam akan memperkaya pengalaman sepak bola Anda.</p>
                    <p>Terakhir, kami ingin mengucapkan terima kasih kepada seluruh pengunjung yang telah setia mendukung kami. Kami berharap Anda menikmati setiap momen yang kami hadirkan dan mendapatkan kepuasan maksimal dari kunjungan Anda di Website Resmi Kumpulan Sepak Bola.</p>
                    <p>Salam Sepak Bola,</p>
                    <p>Ketua UKMSB Universitas Airlangga 2023,</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var images = ['gambar/FUTSAL.jpg', 'gambar/sepakbola.jpg','gambar/latihan.jpg']; // Ganti dengan nama file gambar yang ingin digunakan

    var currentIndex = 0;
    var heroSection = document.querySelector('.hero-section');

    function changeBackgroundImage() {
      heroSection.style.backgroundImage = "linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.3)), url('" + images[currentIndex] + "')";
      currentIndex = (currentIndex + 1) % images.length;
    }

    setInterval(changeBackgroundImage, 5000); // Ganti dengan durasi perubahan slide yang diinginkan (dalam milidetik)
  </script>

<div class="biru">
    <div class="row">
        <div class="col">
            <a href="https://youtu.be/Q1XofoHKifw">Perasaan Saat Masuk Final Sebuah Lomba</a>
        </div>
        <div class="col">
            <a href="https://youtu.be/q3we3BDPU3E">Wajah-Wajah Kepengurusan Baru</a>
        </div>
        <div class="col">
            <a href="https://youtube.com/shorts/3mWzhAn1GKI?feature=share">Bentuk Dukungan ke Sebuah Organisasi</a>
        </div>
    </div>
</div>

@endsection
