@extends('/admin/template-admin')
@section('title','Riwayat')
@section('content')
    <h4 class="black fw-bold mb-3">Riwayat</h4>

    <div class="table__container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="fw-bold green">Daftar Riwayat Perubahan</h5>
        </div>
        <div class="table-responsive">
            <table id="dashboard" class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Keterangan</th>
                        <th>Judul Laporan</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($logs as $log)
                        <tr>
                            <td>{{ $log->id }}</td>
                            <td>{{ ucfirst($log->keterangan) }}</td>
                            <td>{{ $log->name }}</td>
                            <td>{{ date('d F Y H:i:s ', strtotime($log->created_at)) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Initializing data tables --}}
    <script>
        $(document).ready(function() {
            $('#dashboard').DataTable({
                responsive: true,
                destroy: true,
                order: [
                    [0, 'desc']
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
