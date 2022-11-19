<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    {{-- Jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- Custom css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Beranda | SAKBPFK</title>
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid w-100">
            <a class="navbar-brand d-flex align-items-center" href="/beranda">
                <div class="logo me-2">
                    <img src="/image/logo-fk.png" width="100%" alt="Logo Fakultas Kedokteran">
                </div>
                <h5 class="text-white mb-0 d-none">Fakultas Kedokteran <br> Universitas Diponegoro</h5>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse text-end" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/laporan-kegiatan">Laporan Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/informasi">Informasi</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <button class="dropdown-toggle px-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user me-2"></i>giziklinis@gmail.com
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-right-to-bracket me-2"></i>
                                    <h6>Keluar</h6>
                                </div>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    {{-- End navbar --}}

    @yield('content')

    {{-- Footer --}}
    <footer class="bggreen text-center p-4 mt-5 text-white">
        <h6 class="mb-0">Copyright 2022. Fakultas Kedokteran Universitas Diponegoro.</h6>
    </footer>
    {{-- End footer --}}

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    {{-- Fontawesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
