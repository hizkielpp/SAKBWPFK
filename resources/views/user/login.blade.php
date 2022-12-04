<!doctype HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login-style.css') }}">
</head>

<body>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('failed'))
    <div class="alert alert-danger">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="login">
        <div class="content d-flex justify-content-center align-items-center">
            <div class="container px-4 px-sm-3 px-md-5">
                <div class="brand d-flex align-items-center mb-5">
                    <div class="logo me-2">
                        <img src="/image/logo-fk.png" width="100%" alt="Logo Fakultas Kedokteran">
                    </div>
                    <h5 class="text-white mb-0">Fakultas Kedokteran Universitas Diponegoro</h5>
                </div>
                <div class="title mb-5">
                    <h4 class=" text-white fw-bolder">Selamat Datang!</h4>
                    <h5 class="light mt-2">Silahkan masuk dengan akun sesuai
                        prodi masing -masing</h5>
                </div>
                <form method="POST" action="{{ route('login.custom') }}">
                    @csrf
                    <div class="mb-3 mt-4">
                        <label for="email" class="form-label text-white">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                            name="email">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label text-white">Kata Sandi</label>
                        <div class="position-relative">
                            <input type="password" class="form-control" id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                            <div class="eye-icon position-absolute" onclick="showPass()">
                                <i class="fa-solid fa-eye" id="eye"></i>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 btn__green mt-4">Masuk</button>
                </form>
            </div>
        </div>
        <div class="image d-none d-flex justify-content-center align-items-center">
            <div class="position-absolute">
                <img src="{{ asset('image/gambar-login.png') }}" alt="Gambar Login">
            </div>
            <div class="title w-75">
                <h1 class="text-white w-75 fw-bold">Kirim dan pantau berita dengan mudah</h1>
                <h5 class="light mt-5 fwlight">Sistem berbasis website yang berfungsi sebagai sarana program studi
                    dalam mengirimkan dan
                    memantau
                    perkembangan
                    notulensi
                    kegiatan
                    yang akan dikembangkan menjadi berita.</h4>
                    <div class="icon d-flex mt-3">
                        <span></span>
                        <span class="mx-2"></span>
                        <span></span>
                    </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    {{-- Fontawesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- Show/hide password --}}
    <script>
        var state = false;
        const input = document.getElementById("password");

        function showPass() {
            if (state) {
                input.setAttribute("type", "password");
                state = false;
            } else {
                input.setAttribute("type", "text");
                state = true;
            }
        }
    </script>
</body>

</html>
