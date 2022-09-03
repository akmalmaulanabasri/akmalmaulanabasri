<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akmal Maulana</title>
    <link rel="stylesheet" href="{{ asset('css') }}/bs.css">
    <link rel="stylesheet" href="{{ asset('css') }}/custom.css">
    <link rel="stylesheet" href="{{ asset('trix') }}/trix.css">
    <script src="{{ asset('trix') }}/trix.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/htmltypist.js/dist/typist.css">
    <script src="https://cdn.jsdelivr.net/npm/htmltypist.js/dist/typist.js"></script>
    <script src="https://kit.fontawesome.com/e54b3d474c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>

    <nav data-aos="fade-down" data-aos-duration="1500" class="navbar navbar-expand-lg text-light" id="mainNav">
        <div class="container container-custom">
            <a class="navbar-brand text-light" href="/">Akmal Maulana</a>
            <button class="navbar-toggler font-weight-bold bg-dark text-secondary rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-light" href="/">Home</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-light" href="/projects">Project</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-light" href="/articles">Articles</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-light" href="/about">About Me</a></li>
                    @auth
                    <li class="nav-item mx-0 mx-lg-1 dropdown">
                        <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded text-light" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" href="#">Welcome back, {{ Auth::user()->username }}</a>
                        <ul class="dropdown-menu dropdown-home" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item text-light" href="{{ route('dashboard') }}">Dashboard</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item text-light" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                      </li>
                    @else
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-light" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

            <div class="me container">
                <hr class="mt-3 mb-3">
                    <a class="text-decoration-none text-secondary" href="https://instagram.com/bazzree">Instagram</a>
                    <a class="text-decoration-none text-secondary" href="https://twitter.com/bazzree">Twitter</a>
                    <a class="text-decoration-none text-secondary" href="https://github.com/akmalmaulanabasri">Github</a>
                <div class="d-flex justify-content-between flex-nowrap mt-3 mb-3 ">
                    <h5 class="text-light">
                        2022 Akmal Maulana
                    </h5>
                    <img src="https://hitwebcounter.com/counter/counter.php?page=8034106&style=0001&nbdigits=5&type=ip&initCount=0" title="Free Counter" Alt="web counter"   border="0" />
                </div>
                </div>
            


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>