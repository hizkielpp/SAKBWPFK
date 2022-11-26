@extends('/admin/template-admin')

@section('content')
    <div class="wx2 mx-auto">
        <div class="mt-3">
            <h4 class="black fw-bold mb-2">
                Konten Prodi
            </h4>
            <div class="table__container">
                <h5 class="fw-bold green mb-3">Daftar Konten Program Studi</h5>
                <div class="table-responsive">
                    <table id="dashboard" class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Program Studi</th>
                                <th>Status</th>
                                <th class="urutan">Urutan ke</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Laporan Kegiatan A</td>
                                <td>Kedokteran</td>
                                <td>Diproses</td>
                                <td class="urutan">2</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href=""><i class="fa-regular fa-pen-to-square me-1"></i></a>
                                        <button type="button" class="btn__delete"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Laporan Kegiatan B</td>
                                <td>Kedokteran</td>
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
                                <td>Kedokteran</td>
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
                                <td>Kedokteran</td>
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
                                <td>Kedokteran</td>
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
                                <td>Kedokteran</td>
                                <td>Validasi supervisor</td>
                                <td class="urutan">5</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href=""><i class="fa-regular fa-pen-to-square me-1"></i></a>
                                        <button type="button" class="btn__delete"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
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
