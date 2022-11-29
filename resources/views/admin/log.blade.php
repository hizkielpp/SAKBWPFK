@extends('/admin/template-admin')

@section('content')
    <div class="wx2 mx-auto">
        <h4 class="black fw-bold mb-2">Riwayat</h4>
        <!-- Button trigger modal -->

        <div class="table__container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold green">Daftar Riwayat Perubahan</h5>
            </div>
            <div class="table-responsive">
                <table id="dashboard" class="table">
                    <thead>
                        <tr>
                            <th>Keterangan</th>
                            <th>Judul Laporan</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Konten terupload</td>
                            <td>Laporan kegiatan vaksin gratis program studi kedokteran</td>
                            <td>Senin, 10 November 2022 13:45:00</td>
                        </tr>
                        <tr>
                            <td>Konten terupload menjadi diproses</td>
                            <td>Laporan kegiatan vaksin gratis program studi kedokteran</td>
                            <td>Selasa, 11 November 2022 10:15:00</td>
                        </tr>
                        <tr>
                            <td>Konten diproses menjadi validasi supervisor</td>
                            <td>Laporan kegiatan vaksin gratis program studi kedokteran</td>
                            <td>Rabu, 12 November 2022 12:39:00</td>
                        </tr>
                        <tr>
                            <td>Konten validasi supervisor menjadi diposting</td>
                            <td>Laporan kegiatan vaksin gratis program studi kedokteran</td>
                            <td>Rabu, 13 November 2022 15:25:00</td>
                        </tr>
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
                    [2, 'asc']
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
