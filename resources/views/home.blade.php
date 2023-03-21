@extends('layout.app')
@section('content')
<x-modal-component/>
    <div class="container pe-auto ps-auto mt-5">
        <div class="row">
            <div class="col-lg-7 col-sm-12 pt-5 ps-auto home" data-aos="fade-right" data-aos-duration="1500">
                <h2 class="tagline typist">Hi, I'm Akmal Maulana.</h2>
                <p class="mt-2">Students of Wikrama Vocational School.</p>
                <div class="action mt-3">
                    <a href="/about" class="btn learn hover.">More About Me</a>
                    <a href="/projects" class="btn project hover.">Project</a>
                </div>
                <div class="mt-5 pt-5 mb-3">
                    <h2>Current Favorite Tech Stack</h2>
                    <div class="row mt-2 tech">
                        <img class="tech-img" src="img/html.png" alt="">
                        <img class="tech-img" src="img/css.png" alt="">
                        <img class="tech-img" src="img/php.png" alt="">
                        <img class="tech-img" src="img/laravel.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 d-none d-lg-block mypic">
                <img src="{{ asset('img/me/me.jpg') }}" data-aos="fade-left" data-aos-duration="1500" class="img-fluid"
                    alt="Responsive image">
            </div>
        </div>
    </div>

    <div class="container ps-auto pe-auto mt-5">
        <div class="row">
            <div class="col-12 ps-auto">
                <h2>Experience</h2>
                <div class="row">
                    <div class="col-6">
                        <div class="card mt-2">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h4 class="text-dark">BOGOR INOVATION AWARD 2022</h4>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="text-dark">Bogor, Indonesia</h5>
                                    <h5 class="text-dark">2022</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mt-2">
                            <div class="card-body">
                                <div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="text-dark">SMK DIGITAL BOOTCAMP</h4>
                                        <a href="#" class="ms-3" data-bs-toggle="modal"
                                            data-bs-target="#modalDIBO">View Certificate</a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="text-dark">Bali, Indonesia</h5>
                                        <h5 class="text-dark">2022</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mt-2">
                            <div class="card-body">
                                <div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="text-dark">COMPTIA CYBERSECURITY TRAINING</h4>
                                        <a href="#" class="ms-3" data-bs-toggle="modal"
                                            data-bs-target="#modalCYBER">View Certificate</a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="text-dark">Bogor, Indonesia</h5>
                                        <h5 class="text-dark">2022</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mt-2">
                            <div class="card-body">
                                <div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="text-dark">PINGFEST BATTLE OF TECHNOLOGY</h4>
                                        <a href="#" class="ms-3" data-bs-toggle="modal"
                                            data-bs-target="#modalBOT">View Certificate</a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="text-dark">Bogor, Indonesia</h5>
                                        <h5 class="text-dark">2022</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mt-2">
                            <div class="card-body">
                                <div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="text-dark">GOOGLE DEVELOPER FESTIVAL</h4>
                                        <a href="#" class="ms-3" data-bs-toggle="modal"
                                            data-bs-target="#modalGDG">View Certificate</a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="text-dark">Bogor, Indonesia</h5>
                                        <h5 class="text-dark">2022</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container ps-auto pe-auto mt-5">
        <div class="row">
            <div class="col-12 ps-auto">
                <h2>Featured Project</h2>
                <div class="row">
                    @foreach ($project as $item)
                        <div class="col-lg-6 col-sm-12 mt-3">
                            <div class="card shadow hover." data-aos="fade-in" data-aos-duration="1500">
                                @if ($item->gambar != null)
                                    <img src="{{ asset('storage') }}/{{ $item->gambar }}" class="card-img-top post-gambar"
                                        alt="...">
                                @else
                                    <img src="https://source.unsplash.com/400x300?{{ $item->gambar }}"
                                        class="card-img-top post-gambar" alt="...">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->judul }}</h5>
                                    <a target="_blank" href="{{ $item->link }}" class="btn btn-secondary">Visit</a>
                                    <a target="_blank" href="{{ $item->repo }}" class="btn btn-dark">Github</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="/projects" class="btn w-100 mt-3 btn-more">See More Project <i class="fas fa-link"></i></a>
            </div>
        </div>
    </div>
@endsection()
