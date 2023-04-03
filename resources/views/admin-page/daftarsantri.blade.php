@extends("template.admin")
@section("content")
<!-- Custom styles for this template -->

<body>
    <div class="container mt-3">
        <h2>
            <b>Data Calon Santri Baru</b>
        </h2>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No Pendaftaran</th>
                    <th>Program</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Verifikasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>
                        {{ $item['no_regis'] }}
                    </td>
                    <td>
                        {{ $item['program'] }}
                    </td>
                    <td>
                        {{ $item['fullname'] }}
                    </td>
                    <td>
                        @if($item['option']=='1')
                        {{'Laki-laki'}}
                        @else
                        {{'Perempuan'}}
                        @endif
                    </td>
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
                                        <h1 class="modal-title fs-5" id="verifikasiberkasLabel">Verifikasi
                                            Berkas
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="https://psb.kyaigalangsewu.net/storage/uploads/doc/{{$item['path_doc'] }}" width="100%"></iframe>
                                    </div>
                                    <div class=" modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Setuju</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <form action="{{ route('pendaftar.destroy', $item['id']) }}" method="POST">@csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form><a href="#" class="btn btn-success">Detail</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>
    @endsection