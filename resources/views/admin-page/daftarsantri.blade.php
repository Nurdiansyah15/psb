@extends('template.admin')
@section('content')
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
                                @if($item['status']==1)
                                    <span class="badge bg-danger">verified</span>
                                @endif
                            </td>
                            <td>
                                {{ $item['program'] }}
                            </td>
                            <td>
                                {{ $item['fullname'] }}
                            </td>
                            <td>
                                @if ($item['option'] == '1')
                                    {{ 'Laki-laki' }}
                                @else
                                    {{ 'Perempuan' }}
                                @endif
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                @if (isset($item['path_doc']) || isset($item['path_bill']) || isset($item['path_mutasi_emis']))
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#verifikasi{{ $item['no_regis'] }}">
                                        Verifikasi
                                    </button>
                                @endif

                                <!-- Modal Berkas -->
                                <div data-bs-backdrop="static" class="modal fade" id="verifikasi{{ $item['no_regis'] }}"
                                    tabindex="-1" aria-labelledby="verifikasiLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="verifikasiLabel">Verifikasi
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                @if (isset($item['path_doc']))
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#berkas{{ $item['no_regis'] }}">
                                                        Berkas
                                                    </button>
                                                @endif
                                                @if (isset($item['path_bill']))
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#bayar{{ $item['no_regis'] }}">
                                                        Pembayaran
                                                    </button>
                                                @endif
                                                @if (isset($item['path_mutasi_emis']))
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#emis{{ $item['no_regis'] }}">
                                                        Emis
                                                    </button>
                                                @endif
                                            </div>
                                            <div class=" modal-footer">
                                                @if (isset($item['path_doc']) && isset($item['path_bill']))
                                                    <form action="{{asset('admin/pendaftar').'/'. $item['id'] }}" method="POST">
                                                        @csrf
                                                        @method('put')
                                                        <input type="hidden" name="status" value="1">
                                                        <button class="btn btn-success" type="submit">Verifikasi</button>
                                                    </form>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Berkas -->
                                <div data-bs-backdrop="static" class="modal fade" id="berkas{{ $item['no_regis'] }}"
                                    tabindex="-1" aria-labelledby="berkasLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="berkasLabel">Lihat
                                                    Berkas
                                                </h1>
                                            </div>
                                            <div class="modal-body">
                                                <iframe src="{{ asset('storage/uploads/doc/' . $item['path_doc']) }}"
                                                    width="100%" height="350px"></iframe>
                                            </div>
                                            <div class=" modal-footer">
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#verifikasi{{ $item['no_regis'] }}">
                                                    Kembali
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal bayar -->
                                <div data-bs-backdrop="static" class="modal fade" id="bayar{{ $item['no_regis'] }}"
                                    tabindex="-1" aria-labelledby="bayarLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="bayarLabel">Lihat
                                                    Pembayaran
                                                </h1>
                                            </div>
                                            <div class="modal-body">
                                                <iframe src="{{ asset('storage/uploads/bill/' . $item['path_bill']) }}"
                                                    width="100%" height="350px"></iframe>
                                            </div>
                                            <div class=" modal-footer">
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#verifikasi{{ $item['no_regis'] }}">
                                                    Kembali
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Emis -->
                                <div data-bs-backdrop="static" class="modal fade" id="emis{{ $item['no_regis'] }}"
                                    tabindex="-1" aria-labelledby="emisLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="emisLabel">Lihat
                                                    Emis
                                                </h1>
                                            </div>
                                            <div class="modal-body">
                                                <iframe
                                                    src="{{ asset('storage/uploads/mutasi/' . $item['path_mutasi_emis']) }}"
                                                    width="100%" height="350px"></iframe>
                                            </div>
                                            <div class=" modal-footer">
                                                <button type="button" class="btn btn-primary btn-sm"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#verifikasi{{ $item['no_regis'] }}">
                                                    Kembali
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <form action="{{ route('pendaftar.destroy', $item['id']) }}" method="POST">@csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm d-inline-flex">Delete</button>
                                </form><a href="#" class="btn btn-success btn-sm">Detail</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
        </div>
    @endsection
