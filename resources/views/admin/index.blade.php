@extends('/admin/template-admin')

@section('content')
    <h4 class="black fw-bold mb-3">Dashboard</h4>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-12 ">
            <div class="card2 alert alert alert-secondary d-flex justify-content-center align-items-center">
                <div class="content">
                    <h1 class="text-center">{{ $countTerupload }}</h1>
                    <h5 class="text-center mt-1">Konten Terupload</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 ">
            <div class="card2 alert alert-primary d-flex justify-content-center align-items-center">
                <div class="content">
                    <h1 class="text-center">{{ $countDiproses }}</h1>
                    <h5 class="text-center mt-1">Konten Diproses</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 ">
            <div class="card2 alert alert-warning d-flex justify-content-center align-items-center">
                <div class="content">
                    <h1 class="text-center">{{ $countValidasi }}</h1>
                    <h5 class="text-center mt-1">Konten Validasi Supervisor</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 ">
            <div class="card2 alert alert-danger d-flex justify-content-center align-items-center">
                <div class="content">
                    <h1 class="text-center">{{ $countDitolak }}</h1>
                    <h5 class="text-center mt-1">Konten Ditolak</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 ">
            <div class="card2 alert alert-success d-flex justify-content-center align-items-center">
                <div class="content">
                    <h1 class="text-center">{{ $countDiposting }}</h1>
                    <h5 class="text-center mt-1">Konten Diposting</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3">
        <h4 class="black fw-bold mb-3">
            Konten Terbaru
        </h4>
        <div class="table__container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold green">Daftar Konten Terbaru</h5>
                <a href="/prodi" class="text-decoration-none">Lihat selengkapnya</a>
            </div>
            <div class="table-responsive">
                <table id="dashboard" class="table">
                    <thead>
                        <tr>
                            <th class="w10">Urutan ke</th>
                            <th>Judul</th>
                            <th>Status</th>
                            <th>Aksi</th>
                            <th class="text-center">Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $report)
                            <tr>
                                <td class="text-center w10">{{ $report->id }}</td>
                                <td>{{ $report->name }}</td>
                                <td>{{ ucfirst($report->status) }}</td>

                                @if ($report->status === 'terupload')
                                    <td>
                                        <a class="alert alert-primary me-1"href="/reports/{{ $report->id }}/edit?edit=diproses"
                                            onclick="return confirm('Apakah yakin akan diproses?');">Proses</a>
                                        <a class="alert alert-danger"href="/reports/{{ $report->id }}/edit?edit=ditolak"
                                            onclick="return confirm('Apakah yakin akan ditolak?');">Tolak</a>
                                    </td>
                                @elseif ($report->status === 'diproses')
                                    <td>
                                        <a class="btn btn-warning"href="/reports/{{ $report->id }}/edit?edit=validasi supervisor"
                                            onclick="return confirm('Apakah yakin akan divalidasi oleh supervisor');">Validasi
                                            Supervisor</a>
                                    </td>
                                @elseif ($report->status === 'validasi supervisor')
                                    <td>
                                        <a class="btn btn-success"href="/reports/{{ $report->id }}/edit?edit=sudah diposting"
                                            onclick="return confirm('Apakah yakin akan diposting');">Diposting</a>
                                    </td>
                                @endif
                                <td class="text-center"><a href="{{ route('report.download', $report->id) }}"
                                        class=""btn btn-info""><i class="fa-solid fa-download"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Initializing data tables --}}
    <script>
        $(document).ready(function() {
            $('#dashboard').DataTable({
                responsive: true,
                destroy: true,
                order: [
                    [0, 'asc']
                ],
                language: {
                    lengthMenu: 'Menampilkan _MENU_ baris',
                    zeroRecords: 'Nothing found - sorry',
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
