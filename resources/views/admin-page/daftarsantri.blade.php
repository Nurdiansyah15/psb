@extends("template.admin")
@section("content")
<!-- Custom styles for this template -->

<body>
    <div class="container mt-3">
        <h2>Data Calon Santri Baru</h2>
        <button class="btn btn-primary">+tambah</button>
        <br>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No Pendaftaran</th>
                    <th>Program</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Verifikasi Berkas</th>
                    <th>Verifikasi Pembayaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a href="#">1</a>
                    </td>
                    <td>Tahfidz</td>
                    <td>Irvan Muhandis</td>
                    <td>Laki-laki</td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#verifikasiberkas">
                            Verifikasi
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="verifikasiberkas" tabindex="-1"
                            aria-labelledby="verifikasiberkasLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="verifikasiberkasLabel">Verifikasi Berkas
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <img style="margin-left: 30%;width: 150px;height: 200px;"
                                            src="assets/img/dokum.png">
                                        <img src="assets/images/dokum.png" alt="" srcset="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Setuju</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#verifikasibayar">
                            Verifikasi
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="verifikasibayar" tabindex="-1"
                            aria-labelledby="verifikasibayarLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="verifikasibayarLabel">Verifikasi Pembayaran
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Setuju</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary">Edit</a>

                        <a href="#" class="btn btn-danger">Delete</a>
                        <a href="#" class="btn btn-success">Detail</a>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
    </div>
    </div>
    @endsection