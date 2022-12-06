@extends('/admin/template-admin')

@section('content')
    <h4 class="black fw-bold mb-3">
        Konten Prodi
    </h4>
    <div class="table__container">
        <h5 class="fw-bold green mb-3">Daftar Konten Program Studi</h5>
        <div class="table-responsive">
            <table id="dashboard" class="table">
                <thead>
                    <tr>
                        <th class="w10">Urutan ke</th>
                        <th>Judul</th>
                        <th>Program Studi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                        <th class="text-center">Download</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reports as $report)
                        <tr>
                            <td class="w10 text-center">{{ $report->id }}</td>
                            <td>{{ ucfirst($report->name) }}</td>
                            <td>{{ ucfirst($report->user->name) }}</td>
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
                                    <a class="alert alert-warning"href="/reports/{{ $report->id }}/edit?edit=validasi supervisor"
                                        onclick="return confirm('Apakah yakin akan divalidasi oleh supervisor');">Validasi
                                        Supervisor</a>
                                </td>
                            @elseif ($report->status === 'validasi supervisor')
                                <td>
                                    <a class="alert alert-success"href="/reports/{{ $report->id }}/edit?edit=sudah diposting"
                                        onclick="return confirm('Apakah yakin akan diposting');">Posting</a>
                                </td>
                            @endif
                            <td class="text-center"><a href="{{ route('report.download', $report->id) }}" class=""><i
                                        class="fa-solid fa-download"></i></a></td>
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
