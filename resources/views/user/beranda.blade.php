@extends('/user/template-user')
@section('title','Beranda')
@section('berandaActive','active')
@section('content')
    {{-- Custom style --}}
    <link rel="stylesheet" href="{{ asset('css/beranda-style.css') }}">

    {{-- Hero --}}
    <div class="beranda">
        <div class="hero d-block pt-lg-0 pt-3">
            <div class="body m-auto">
                <div class="content mx-auto">
                    <h1 class="text-white mb-4 fw-bold">Upload Laporan Kegiatan Program Studi dengan Mudah</h1>
                    <div class="second__image my-3">
                        <img src="/image/hero-image-rev.png" alt="Gambar Hero" width="100%">
                    </div>
                    <div class="mt-2 text-white">
                        <div class="d-flex align-items-start mb-3">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            <h4>Upload laporan kegiatan masing - masing program studi
                            </h4>
                        </div>
                        <div class="d-flex align-items-start">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            <h4>Pantau perkembangan progress konten website
                            </h4>
                        </div>
                    </div>
                    <a href="{{ route('upload-kegiatan') }}" class="btn__white mt-5">Upload Kegiatan</a>
                </div>
            </div>
            <div class="image d-none m-auto px-5">
                <img src="/image/hero-image-rev.png" alt="Gambar Hero" width="100%">
            </div>
        </div>
        <div class="layanan mt1 w90 mx-auto">
            <div class="d-flex header align-items-center mx-auto">
                <span></span>
                <h4 class="green fw-bold text-center mx-3">Layanan
                </h4>
                <span></span>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6 mb-lg-0 mb-3 col-12">
                    <div class="main__card p-5 py-4 px-4">
                        <h4 class="fwsemi"><i class="fa-solid fa-cloud-arrow-up me-2"></i>Pelaporan Kegiatan</h4>
                        <h5 class="mt-2 grey">Setiap prodi dapat mengunggah laporan
                            kegiatan baik akademik maupun
                            non akademik</h5>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="main__card p-5 py-4 px-4">
                        <h4 class="fwsemi"><i class="fa-solid fa-file-word me-2"></i>Pemantauan Berita</h4>
                        <h5 class="mt-2 grey">Setiap prodi dapat melihat perkembangan
                            pembuatan berita dari laporan kegiatan
                            yang dikirim</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End hero --}}
@endsection
