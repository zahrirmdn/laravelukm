@extends('layout.utama')

@section('hubung')
<title>Halaman Event</title>
<div class="accordion accordion-flush" id="accordionFlushExample">
    @php
        $flag = false; // Variabel flag untuk memeriksa apakah "sby cup" sudah muncul atau belum
    @endphp

    @foreach ($events as $event)
        @if ($event->nama_event == 'sbycup' && !$flag) {{-- Memeriksa apakah nama_event = 'sby cup' dan flag = false --}}
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        {{$event->nama_event}}
                        <br>
                        {{$event->tgl_event}}
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Lomba Surabaya Cup Sepak Bola adalah kompetisi sepak bola yang diadakan di kota Surabaya. Lomba ini merupakan ajang bergengsi yang diikuti oleh tim-tim sepak bola dari berbagai daerah.
                        Lomba Surabaya Cup Sepak Bola adalah turnamen bergengsi yang diadakan di kota Surabaya setiap tahun. Kompetisi ini menarik perhatian tim-tim sepak bola dari seluruh Indonesia untuk bersaing dalam pertandingan yang sengit. Lomba ini diadakan dengan tujuan untuk mempromosikan olahraga sepak bola dan mengembangkan bakat-bakat sepak bola di daerah.
                        Peserta lomba berasal dari berbagai tingkat usia, mulai dari pemain muda hingga dewasa. Lomba ini juga menjadi ajang untuk menemukan bakat-bakat muda yang berpotensi untuk menjadi pemain sepak bola profesional. Selain itu, Lomba Surabaya Cup Sepak Bola juga memberikan kesempatan bagi para pemain untuk mengasah kemampuan, memperluas jaringan, dan memperoleh pengalaman berharga dalam dunia sepak bola.
                         Lomba ini mendapatkan dukungan yang besar dari pemerintah, sponsor, dan masyarakat setempat. Pertandingan-pertandingan seru dan penuh semangat membuat Lomba Surabaya Cup Sepak Bola menjadi acara yang dinantikan oleh pecinta sepak bola. Suasana riuh di lapangan, sorakan penonton, dan persaingan ketat membuat lomba ini menjadi momen yang tak terlupakan bagi semua peserta.
                        Lomba Surabaya Cup Sepak Bola juga menawarkan hadiah menarik bagi tim yang berhasil meraih juara. Selain itu, acara ini juga dilengkapi dengan berbagai kegiatan pendukung, seperti seminar sepak bola, pameran, dan penampilan hiburan. Lomba ini memberikan kesempatan bagi semua pihak untuk saling bertemu, berbagi pengalaman, dan menjalin persahabatan dalam suasana yang kompetitif. Lomba Surabaya Cup Sepak Bola menjadi wadah bagi tim-tim sepak bola untuk mengukur kemampuan mereka dan meningkatkan kualitas permainan. Selama lomba, peserta juga memiliki kesempatan untuk berinteraksi dengan pelatih dan pemain sepak bola profesional, yang memberikan wawasan berharga tentang strategi dan teknik permainan. Lomba Surabaya Cup Sepak Bola bukan hanya tentang pertandingan, tetapi juga tentang semangat persatuan dan sportivitas. Peserta diajak untuk menghormati aturan dan nilai-nilai fair play dalam setiap pertandingan. Lomba ini juga memberikan peluang bagi para penggemar sepak bola untuk mendukung tim kesayangan mereka dan menikmati aksi seru di lapangan.
                        Lomba Surabaya Cup Sepak Bola telah menjadi platform penting bagi pengembangan sepak bola di Surabaya dan sekitarnya. Acara ini memperkuat komunitas sepak bola, membangun kecintaan terhadap olahraga, dan mempromosikan Surabaya sebagai kota sepak bola yang berkembang. Melalui
                         Lomba Surabaya Cup Sepak Bola, diharapkan akan tercipta generasi muda yang berbakat dan berprestasi dalam dunia sepak bola. <a href='/pesan'>buy here</a></div>
                </div>
            </div>
            @php
                $flag = true; // Mengeset flag menjadi true karena "sby cup" sudah muncul
            @endphp
        @endif
    @endforeach
</div>
<div class="accordion accordion-flush" id="accordionFlushExample">
    @php
        $flag1 = false; // Variabel flag untuk memeriksa apakah "sby cup" sudah muncul atau belum
    @endphp

    @foreach ($events as $eveent)
        @if ($eveent->nama_event == 'jatim' && !$flag1) {{-- Memeriksa apakah nama_event = 'sby cup' dan flag = false --}}
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        {{$eveent->nama_event}}
                        <br>
                        {{$eveent->tgl_event}}
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Seleksi tim sepak bola Jatim merupakan tahap penting dalam membangun tim yang kompetitif. Dalam proses ini, para pemain sepak bola dari berbagai daerah di Jawa Timur akan
                        diberikan kesempatan untuk menunjukkan kemampuan terbaik mereka. Tim pelatih akan melakukan pemantauan ketat, evaluasi teknik dan taktik, serta uji fisik untuk menentukan pemain-pemain
                        terbaik yang akan mewakili Jawa Timur dalam berbagai kompetisi. Seleksi tim sepak bola Jatim bertujuan untuk menciptakan tim yang solid,
                        berkualitas, dan mampu bersaing dengan tim-tim sepak bola dari daerah lain.<a href='/pesan'>buy here</a></div>
                </div>
            </div>
            @php
                $flag1 = true; // Mengeset flag menjadi true karena "sby cup" sudah muncul
            @endphp
        @endif
    @endforeach
</div>
<div class="accordion accordion-flush" id="accordionFlushExample">
    @php
        $flag2 = false; // Variabel flag untuk memeriksa apakah "sby cup" sudah muncul atau belum
    @endphp

    @foreach ($events as $event)
        @if ($event->nama_event == 'unaircup' && !$flag2) {{-- Memeriksa apakah nama_event = 'sby cup' dan flag = false --}}
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        {{$event->nama_event}}
                        <br>
                        {{$event->tgl_event}}
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Unair Cup sepak bola adalah kompetisi tahunan yang diselenggarakan oleh Universitas Airlangga (Unair) dengan tujuan mempromosikan semangat olahraga dan membangun ikatan antara
                        mahasiswa sepak bola dari berbagai perguruan tinggi di Indonesia. Kompetisi ini menampilkan tim-tim sepak bola terbaik dari berbagai universitas yang berkompetisi secara intens dalam turnamen ini.
                         Unair Cup sepak bola juga menjadi ajang untuk menunjukkan bakat dan kemampuan para pemain sepak bola mahasiswa. Selain itu, kegiatan ini juga menciptakan suasana persahabatan
                         dan kebersamaan di antara peserta serta memperkuat solidaritas di antara perguruan tinggi yang berpartisipasi dalam kompetisi tersebut.<a href='/pesan'>buy here</a></div>
                </div>
            </div>
            @php
                $flag2 = true; // Mengeset flag menjadi true karena "sby cup" sudah muncul
            @endphp
        @endif
    @endforeach
</div>
@endsection
