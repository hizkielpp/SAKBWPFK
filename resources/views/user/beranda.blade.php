@extends('/user/template-user')

@section('content')
    {{-- Custom style --}}
    <link rel="stylesheet" href="{{ asset('css/beranda-style.css') }}">

    {{-- Hero --}}
    <div class="beranda">
        <div class="hero position-relative">
            <img src="/image/hero-image.jpg" alt="Foto Fakultas Kedokteran" width="100%">
            <div class="card w90 text-center p-md-5 py-4 px-3 position-absolute">
                <h4 class="black mb-4 fw-bold">Upload laporan kegiatan program studi Anda</h4>
                <a href="" class="btn btn-primary btn__green2 mx-auto">
                    <i class="fa-solid fa-cloud-arrow-up me-2"></i>Upload kegiatan
                </a>
            </div>
        </div>
        <div class="layanan w90 mx-auto">
            <div class="d-flex header align-items-center mx-auto">
                <span></span>
                <h4 class="green fw-bold text-center mx-3">Layanan
                </h4>
                <span></span>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6 mb-lg-0 mb-3 col-12">
                    <div class="card p-5 py-4 px-4">
                        <h4 class="fwsemi"><i class="fa-solid fa-cloud-arrow-up me-2"></i>Pelaporan Kegiatan</h4>
                        <h5 class="mt-2 grey">Setiap prodi dapat mengunggah laporan
                            kegiatan baik akademik maupun
                            non akademik</h5>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="card p-5 py-4 px-4">
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
