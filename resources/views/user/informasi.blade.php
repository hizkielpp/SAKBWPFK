@extends('/user/template-user')

@section('content')
    {{-- Custom style --}}
    <link rel="stylesheet" href="{{ asset('css/informasi-style.css') }}">

    <div class="informasi wx mx-auto mt2">
        <div class="d-flex header align-items-center justify-content-center mb-4">
            <span></span>
            <h4 class="green fw-bold text-center mx-3">Informasi
            </h4>
            <span></span>
        </div>
        <div class="mt-3">
            <h4 class="black fwsemi mb-2">Alur Pembuatan Konten</h4>
            <div class="d-flex align-items-start">
                <div class="nomor d-flex align-items-center justify-content-center me-2">
                    <p class="text-white">1</p>
                </div>
                <h5 class="grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quibusdam minima rerum,
                    ad quod
                    temporibus ducimus ullam adipisci molestias similique amet dolorum omnis officia, corrupti optio id
                    dolorem? Tenetur, adipisci!</h5>
            </div>
            <div class="d-flex align-items-start mt-2">
                <div class="nomor d-flex align-items-center justify-content-center me-2">
                    <p class="text-white">2</p>
                </div>
                <h5 class="grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quibusdam minima rerum,
                    ad quod
                    temporibus ducimus ullam adipisci molestias similique amet dolorum omnis officia, corrupti optio id
                    dolorem? Tenetur, adipisci!</h5>
            </div>
            <div class="d-flex align-items-start mt-2">
                <div class="nomor d-flex align-items-center justify-content-center me-2">
                    <p class="text-white">3</p>
                </div>
                <h5 class="grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quibusdam minima rerum,
                    ad quod
                    temporibus ducimus ullam adipisci molestias similique amet dolorum omnis officia, corrupti optio id
                    dolorem? Tenetur, adipisci!</h5>
            </div>
        </div>
        <div class="mt-4">
            <h4 class="black fwsemi mb-2">Tata Cara Upload Laporan Kegiatan</h4>
            <div class="d-flex align-items-start mt-2">
                <div class="nomor d-flex align-items-center justify-content-center me-2">
                    <p class="text-white">1</p>
                </div>
                <h5 class="grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quibusdam minima rerum,
                    ad quod
                    temporibus ducimus ullam adipisci molestias similique amet dolorum omnis officia, corrupti optio id
                    dolorem? Tenetur, adipisci!</h5>
            </div>
            <div class="d-flex align-items-start mt-2">
                <div class="nomor d-flex align-items-center justify-content-center me-2">
                    <p class="text-white">2</p>
                </div>
                <h5 class="grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quibusdam minima rerum,
                    ad quod
                    temporibus ducimus ullam adipisci molestias similique amet dolorum omnis officia, corrupti optio id
                    dolorem? Tenetur, adipisci!</h5>
            </div>
        </div>
    </div>
@endsection
