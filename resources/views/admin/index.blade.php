@extends('/admin/template-admin')

@section('content')
    <div class="wx2 mx-auto">
        <h4 class="black fw-bold mb-2">Dashboard</h4>
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
            <h4 class="black fw-bold mb-2">
                Konten Terbaru
            </h4>
            <div class="table__container">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-bold green">Daftar Konten Terbaru</h5>
                    <a href="" class="text-decoration-none">Lihat selengkapnya</a>
                </div>
                <div class="table-responsive">
                    <table id="dashboard" class="table">
                        <thead>
                            <tr>
                                <th>Urutan ke</th>
                                <th>Judul</th>
                                <th>Status</th>
                                <th class="urutan">Download</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reports as $report )
                            <tr>
                                <td>{{ $report->id }}</td>
                                <td>{{ $report->name }}</td>
                                <td>{{ $report->status }}</td>
                                <td><a href="{{ route('report.download',$report->id) }}" class=""btn btn-info"">Download</a></td>
                                @if ($report->status==="terupload")
                                <td>
                                    <a class="btn btn-primary"href="/reports/{{ $report->id }}/edit?edit=diproses" onclick="return confirm('Apakah yakin akan diproses?');">Diproses</a>
                                    <a class="btn btn-danger"href="/reports/{{ $report->id }}/edit?edit=ditolak" onclick="return confirm('Apakah yakin akan ditolak?');">Ditolak</a>
                                </td>        
                                @elseif ($report->status==="diproses")
                                <td>
                                    <a class="btn btn-info"href="/reports/{{ $report->id }}/edit?edit=validasi supervisor" onclick="return confirm('Apakah yakin akan divalidasi oleh supervisor');">Validasi Supervisor</a>
                                </td>
                                @elseif ($report->status==="validasi supervisor")
                                <td>
                                    <a class="btn btn-success"href="/reports/{{ $report->id }}/edit?edit=sudah diposting" onclick="return confirm('Apakah yakin akan diposting');">Diposting</a>
                                </td>         
                                @endif
                                {{-- <td>
                                    <form action="{{ route('reports.destroy',$report->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('reports.show',$report->id) }}">Show</a>
                                        <a class="btn btn-primary" href="{{ route('reports.edit',$report->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td> --}}
                            </tr>
                            @endforeach
                            {{-- <tr>
                                <td>2</td>
                                <td>Laporan Kegiatan B</td>
                                <td>Diproses</td>
                                <td class="urutan">5</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href=""><i class="fa-regular fa-pen-to-square me-1"></i></a>
                                        <button type="button" class="btn__delete"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Laporan Kegiatan C</td>
                                <td>Validasi supervisor</td>
                                <td class="urutan">6</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href=""><i class="fa-regular fa-pen-to-square me-1"></i></a>
                                        <button type="button" class="btn__delete"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Laporan Kegiatan D</td>
                                <td>Sudah diposting</td>
                                <td class="urutan">8</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href=""><i class="fa-regular fa-pen-to-square me-1"></i></a>
                                        <button type="button" class="btn__delete"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Laporan Kegiatan E</td>
                                <td>Sudah diposting</td>
                                <td class="urutan">9</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href=""><i class="fa-regular fa-pen-to-square me-1"></i></a>
                                        <button type="button" class="btn__delete"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Laporan Kegiatan B</td>
                                <td>Validasi supervisor</td>
                                <td class="urutan">5</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href=""><i class="fa-regular fa-pen-to-square me-1"></i></a>
                                        <button type="button" class="btn__delete"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
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
