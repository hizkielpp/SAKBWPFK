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
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/login-style.css')}}">
</head>

<body>
    <div class="login">
        <div class="content d-flex justify-content-center align-items-center">
            <div class="body w-50">
                <div class="title">
                    <h4 class="black fw-bolder">Selamat Datang!</h4>
                    <h5 class="grey mt-2">Silahkan masuk dengan akun sesuai
                        prodi masing -masing</h5>
                </div>
                <form method="POST" action="{{ route('login.custom') }}">
                    @csrf
                    <div class="mb-3 mt-4">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="judul" class="form-control" id="judul" aria-describedby="emailHelp" name="judul">
                        @if ($errors->has('judul'))
                        <span class="text-danger">{{ $errors->first('judul') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary w-100 btn__green mt-4">Masuk</button>
                </form>
            </div>
        </div>
        <div class="d-none d-flex justify-content-center align-items-center">
            <div class="position-absolute">
                <img src="{{asset('image/login-image.jpeg')}}" alt="">
            </div>
            <div class="title w-75">
                <h1 class="text-white w-75 fw-bold">Kirim dan pantau berita dengan mudah</h1>
                <h5 class="light mt-3 fwlight light">Sistem berbasis website yang berfungsi sebagai sarana program studi dalam mengirimkan dan
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
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>