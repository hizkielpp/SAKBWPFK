@extends('/user/template-user')

@section('content')
    {{-- Data tables --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

    <div class="laporan__kegiatan wx mx-auto mt2">
        <div class="d-flex header align-items-center justify-content-center mb-4">
            <span></span>
            <h4 class="green fw-bold text-center mx-3">Laporan Kegiatan
            </h4>
            <span></span>
        </div>
        <div class="table__container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold green">Daftar Laporan Kegiatan</h4>
                <a href="" class="btn btn-primary btn__green2">Upload
                    Kegiatan</a>
            </div>
            <table id="laporanKegiatan" class="table table-responsive mb-3 mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Status</th>
                        <th>Urutan ke</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Laporan Kegiatan A</td>
                        <td>Validasi supervisor</td>
                        <td>3</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href=""><i class="fa-regular fa-pen-to-square me-1"></i></a>
                                <button type="button" class="btn__delete"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Laporan Kegiatan B</td>
                        <td>Validasi supervisor</td>
                        <td>5</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href=""><i class="fa-regular fa-pen-to-square me-1"></i></a>
                                <button type="button" class="btn__delete"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Data Tables --}}
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

    {{-- Initializing data tables --}}
    <script>
        $(document).ready(function() {
            $('#laporanKegiatan').DataTable();
        });
    </script>
@endsection
