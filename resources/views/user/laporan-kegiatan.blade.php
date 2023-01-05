@extends('/user/template-user')
@section('title','Laporan Kegiatan')
@section('laporanActive','active')
@section('content')
    {{-- Bootstrap data tables --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    {{-- Custom css --}}
    <link rel="stylesheet" href="{{ asset('css/upload-kegiatan-style.css') }}">

    <div class="laporan__kegiatan wx mx-auto mt2">
        <div class="d-flex header align-items-center justify-content-center mb-4">
            <span></span>
            <h4 class="green fw-bold text-center mx-3">Laporan Kegiatan
            </h4>
            <span></span>
        </div>
        @if ($message = Session::get('success'))
        <div class="w-100 content mx-auto">
            <div class="alert alert-success">
                <h6>{{ $message }}</h6>
            </div>
        </div>
        @endif
        <div class="mt-3">
                @if (isset($rejectedReports))
                <div class="alert alert-warning card2">

                        <h5 class="mb-2">Informasi :</h5>
                        <div class="d-flex align-items-start">
                            @foreach ($rejectedReports as $key => $rejectedReport )
                            <h6>{{ $key+1 }}.</h6>
                            <h6 class="grey ms-1">Laporan kegiatan {{ $rejectedReport->name }} ditolak! <br>Alasan penolakan : {{ $rejectedReport->keterangan }}. <br> Silahkan perbaiki dan upload ulang laporan kegiatan <a href="{{ route('upload-kegiatan',['id'=>$rejectedReport->id]) }}">disini</a>.</h6>
                            @endforeach
                        </div>
                </div>
                @endif
        </div>
        <div class="table__container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold green">Daftar Laporan Kegiatan</h4>
                <a href="/upload-kegiatan" class="btn btn-primary btn__green2">Upload
                    Kegiatan</a>
            </div>
            <div class="table-responsive ">
                <table id="laporanKegiatan" class="table">
                    <thead>
                        <tr>
                            <th>Judul Laporan</th>
                            <th>Status</th>
                            <th class="urutan">Urutan ke</th>
                            {{-- <th>Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $key => $report)
                            <tr>
                                <td>{{ $report->name }}</td>
                                <td>{{ $report->status }}</td>
                                <td class="urutan">{{ $report->id }}</td>
                                {{-- <td>
                                    <div class="d-flex align-items-center">
                                        <a href=""><i class="fa-regular fa-pen-to-square me-1"></i></a>
                                        <button type="button" class="btn__delete"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Data Tables --}}
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js">
    </script>

    {{-- Initializing data tables --}}
    <script>
        $(document).ready(function() {
            $('#laporanKegiatan').DataTable({
                responsive: false,
                destroy: true,
                order: [
                    [2, 'desc']
                ],
                language: {
                    lengthMenu: 'Menampilkan _MENU_ baris',
                    zeroRecords: 'Anda belum mengupload laporan kegiatan. <br>Silahkan upload laporan kegiatan terlebih dahulu.',
                    info: 'Menampilkan _PAGE_ dari _PAGES_',
                    infoEmpty: 'Baris tidak tersedia',
                    infoFiltered: '(filtered from _MAX_ total records)',
                    "search": "Cari :",
                    "paginate": {
                        "previous": "Sebelumnya",
                        "next": "Berikutnya"
                    }
                },
                lengthMenu: [
                    [5, 10, 20, -1],
                    [5, 10, 20, 'All'],
                ],
            });
        });
    </script>
@endsection
