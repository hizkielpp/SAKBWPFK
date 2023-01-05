@extends('/user/template-user')
@section('title','Upload Kegiatan')
@section('laporanActive','active')
@section('content')
    {{-- Dropify --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Custom style --}}
    <link rel="stylesheet" href="{{ asset('css/informasi-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/upload-kegiatan-style.css') }}">

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @error('file')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    <div class="upload__kegiatan wx mx-auto mt2">
        <div class="navback d-flex flex-wrap align-items-center mb-3">
            <a href="/laporan-kegiatan" class="text-decoration-none grey"><i
                    class="fa-solid fa-arrow-left-long me-2"></i>Laporan
                Kegiatan <span>/</span></a>
            <a href="/upload-kegiatan" class="fwsemi black text-decoration-none ms-2">Upload Kegiatan</a>
        </div>
        <div class="mx-auto w90">
            <div class="d-flex header align-items-center justify-content-center mb-4">
                <span></span>
                <h4 class="green fw-bold text-center mx-3">Upload Kegiatan
                </h4>
                <span></span>
            </div>
            <div class="w-100 content mx-auto">
                <div class="main__card py-3 px-4">
                    <h5 class="black fwsemi mb-3">Ketentuan</h5>
                    <div class="d-flex align-items-start">
                        <div class="nomor d-flex align-items-center justify-content-center me-2">
                            <p class="text-white">1</p>
                        </div>
                        <h6 class="grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quibusdam minima
                            rerum,
                            ad quod
                            temporibus ducimus ullam adipisci molestias similique amet dolorum omnis officia!</h6>
                    </div>
                    <div class="d-flex align-items-start mt-2">
                        <div class="nomor d-flex align-items-center justify-content-center me-2">
                            <p class="text-white">1</p>
                        </div>
                        <h6 class="grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quibusdam minima
                            rerum,
                            ad quod
                            temporibus ducimus ullam adipisci molestias similique amet dolorum omnis officia!</h6>
                    </div>
                    <div class="d-flex align-items-start mt-2">
                        <div class="nomor d-flex align-items-center justify-content-center me-2">
                            <p class="text-white">1</p>
                        </div>
                        <h6 class="grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quibusdam minima
                            rerum,
                            ad quod
                            temporibus ducimus ullam adipisci molestias similique amet dolorum omnis officia!</h6>
                    </div>
                </div>
                <div class="mt-3">
                    <form method="POST" action="{{ route('storeKegiatan') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($id))
                        <input type="text" name="id" value="{{ $id }}" hidden>
                        @endif

                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Kegiatan</label>
                            <input name="name" type="text" class="form-control" id="judul"
                                aria-describedby="judul">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Upload File</label>
                            <div class="dropify__wrapper">
                                <input name="file" value="" type="file" class="dropify" data-default-file="url_of_your_file"
                                    data-max-file-size="1M" data-allowed-file-extensions="pdf" />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn__green2 w-100 mt-3">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Dropify
        $('.dropify').dropify();
    </script>
@endsection
