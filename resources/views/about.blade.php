@extends('layout.app')
@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-7 col-sm-12 pt-5 ps-auto home" data-aos="fade-right" data-aos-duration="1500">
            <h2 class="tagline typist">Hi, I'm Akmal Maulana.</h2>
            <p class="mt-2">Nama saya Akmal Maulana Basri. Biasa dipanggil Akmal. Sekarang, saya sedang menempuh pendidikan Tingkat SMK di SMK Wikrama Bogor. Tepatnya Jurusan PPLG (Pengembangan Perangkat Lunak dan Gim)</p>
            <p>Sekarang juga saya sedang mendalami materi Laravel di sekolah. Terkadang saya juga belajar di Youtube WPU Web Programming Unpas, Disana sangat lengkap materinya dan sangat bagus untuk pemula</p>
            <p class="mt-5 katabijak">{{ $kataBijak['quotes'] }} <br> ~{{ $kataBijak['author'] }}~</p>

            <div class="sosmed">
                <a href="https://github.com/akmalmaulanabasri" target="_blank" class="btn btn-secondary text-dark"><i class="fab fa-github"></i></a>
                <a href="https://www.instagram.com/bazzree/" target="_blank" class="btn btn-secondary text-dark"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/bazzree" target="_blank" class="btn btn-secondary text-dark"><i class="fab fa-twitter"></i></a>
                <!-- email -->
                <a href="mailto:akmalmaulanabasri@gmail.com" target="_blank" class="btn btn-secondary text-dark"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
        <div class="col-lg-5 col-sm-12 d-none d-lg-block">
            <img src="https://akmalmaulana.my.id/assets/img/akmal.jpg" data-aos="fade-left" data-aos-duration="1500" class="img-fluid" alt="Responsive image">
        </div>
    </div>
</div>
@endsection()