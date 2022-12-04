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
            <h5 class="black fwsemi mb-2">Alur Pembuatan Konten</h5>
            @foreach ($informationAlurs as $informationAlur)
            <div class="d-flex align-items-start">
                <div class="nomor d-flex align-items-center justify-content-center me-2">
                    <p class="text-white">{{ $informationAlur->nomor }}</p>
                </div>
                <h6 class="grey">{{ $informationAlur->deskripsi }}</h6>
            </div>  
            @endforeach
        </div>
        <div class="mt-4">
            <h5 class="black fwsemi mb-2">Tata Cara Upload Laporan Kegiatan</h5>
            @foreach ($informationCaras as $informationCara)
            <div class="d-flex align-items-start">
                <div class="nomor d-flex align-items-center justify-content-center me-2">
                    <p class="text-white">{{ $informationCara->nomor }}</p>
                </div>
                <h6 class="grey">{{ $informationCara->deskripsi }}</h6>
            </div>  
            @endforeach
        </div>
    </div>
@endsection
