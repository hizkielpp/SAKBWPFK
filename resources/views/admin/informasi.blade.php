@extends('/admin/template-admin')

@section('content')
    <div class="wx2 mx-auto">
        <h4 class="black fw-bold mb-2">Informasi</h4>
        <!-- Button trigger modal -->

        <div class="table__container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold green">Daftar Informasi</h5>
                <div class="">
                    <button type="button" class="btn btn-light btn__white2 me-2" data-bs-toggle="modal"
                        data-bs-target="#tambahKategori">
                        Tambah Kategori
                    </button>
                    <!-- Modal kategori -->
                    <div class="modal fade" id="tambahKategori" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 black fw-bold" id="exampleModalLabel">Tambah Kategori</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label for="kategori" class="form-label">Masukkan Kategori Baru</label>
                                                <input type="text" class="form-control" id="kategori">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn__green2" data-bs-toggle="modal"
                        data-bs-target="#tambahInformasi">
                        Tambah Informasi
                    </button>
                    <!-- Modal informasi -->
                    <div class="modal fade" id="tambahInformasi" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 black fw-bold" id="exampleModalLabel">Tambah Informasi</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label for="nomor" class="form-label">Nomor</label>
                                                <input type="number" class="form-control" id="nomor">
                                            </div>
                                            <label for="pilihKategori" class="form-label">Kategori</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>...</option>
                                                <option value="1">Alur Upload Konten</option>
                                                <option value="2">Tata Cara Upload Konten</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="informasi" class="form-label">Masukkan Informasi Baru</label>
                                            <textarea class="form-control" id="informasi" rows="3"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="dashboard" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="w-25">Deskripsi</th>
                            <th class="column__kategori">Kategori</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="w-75">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil doloribus
                                beatae sed vero,
                                quo nemo sapiente totam saepe. Voluptatem accusantium voluptatibus velit. Rerum, harum
                                architecto! Sapiente, vel eum! Quibusdam, nobis!</td>
                            <td class="column__kategori">Tata Cara Upload Konten</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href=""><i class="fa-regular fa-pen-to-square me-1"></i></a>
                                    <button type="button" class="btn__delete"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="w-75">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil doloribus
                                beatae sed vero,
                                quo nemo sapiente totam saepe. Voluptatem accusantium voluptatibus velit. Rerum, harum
                                architecto! Sapiente, vel eum! Quibusdam, nobis!</td>
                            <td class="column__kategori">Tata Cara Upload Konten</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href=""><i class="fa-regular fa-pen-to-square me-1"></i></a>
                                    <button type="button" class="btn__delete"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="w-75">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil doloribus
                                beatae sed vero,
                                quo nemo sapiente totam saepe. Voluptatem accusantium voluptatibus velit. Rerum, harum
                                architecto! Sapiente, vel eum! Quibusdam, nobis!</td>
                            <td class="column__kategori">Alur Upload Konten</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href=""><i class="fa-regular fa-pen-to-square me-1"></i></a>
                                    <button type="button" class="btn__delete"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="w-75">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil doloribus
                                beatae sed vero,
                                quo nemo sapiente totam saepe. Voluptatem accusantium voluptatibus velit. Rerum, harum
                                architecto! Sapiente, vel eum! Quibusdam, nobis!</td>
                            <td class="column__kategori">Alur Upload Konten</td>
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
