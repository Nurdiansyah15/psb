@extends('template.admin3')
@section('content')
<!-- Custom styles for this template -->

<body>
    <?php
    function tgl_indo($tanggal)
    {
        if ($tanggal == '') {
            return '';
        }
        $bulan = [
            1 => 'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember',
        ];
        $pecahkan = explode('-', $tanggal);

        return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
    }
    ?>
    <div class="container mt-3">
        <h2>
            <b>Data Calon Santri Baru</b>
        </h2>
        <div class="table-responsive">
            <table id="example" class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Pendaftaran</th>
                        <th>Program</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Verif</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            {{ $item['no_regis'] }}
                            @if ($item['status'] == 1)
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
                            <button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#verifikasi{{ $item['no_regis'] }}">
                                <i class="fa fa-edit"></i>
                            </button>
                            @endif

                            <!-- Modal verifikasi -->
                            <div class="modal fade" id="verifikasi{{ $item['no_regis'] }}" tabindex="-1" aria-labelledby="verifikasiLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="verifikasiLabel">Verifikasi
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            @if (isset($item['path_doc']))
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#berkas{{ $item['no_regis'] }}">
                                                Berkas
                                            </button>
                                            @endif
                                            @if (isset($item['path_bill']))
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bayar{{ $item['no_regis'] }}">
                                                Pembayaran
                                            </button>
                                            @endif
                                            @if (isset($item['path_mutasi_emis']))
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#emis{{ $item['no_regis'] }}">
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
                            <div class="modal fade" id="berkas{{ $item['no_regis'] }}" tabindex="-1" aria-labelledby="berkasLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="berkasLabel">Lihat
                                                Berkas
                                            </h1>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="{{ asset('storage/uploads/doc/' . $item['path_doc']) }}" width="100%" height="350px"></iframe>
                                        </div>
                                        <div class=" modal-footer">
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#verifikasi{{ $item['no_regis'] }}">
                                                Kembali
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal bayar -->
                            <div class="modal fade" id="bayar{{ $item['no_regis'] }}" tabindex="-1" aria-labelledby="bayarLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="bayarLabel">Lihat
                                                Pembayaran
                                            </h1>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="{{ asset('storage/uploads/bill/' . $item['path_bill']) }}" width="100%" height="350px"></iframe>
                                        </div>
                                        <div class=" modal-footer">
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#verifikasi{{ $item['no_regis'] }}">
                                                Kembali
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Emis -->
                            <div class="modal fade" id="emis{{ $item['no_regis'] }}" tabindex="-1" aria-labelledby="emisLabel" aria-hidden="true">
                                <div class="modal-dialog modal-">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="emisLabel">Lihat
                                                Emis
                                            </h1>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="{{ asset('storage/uploads/mutasi/' . $item['path_mutasi_emis']) }}" width="100%" height="350px"></iframe>
                                        </div>
                                        <div class=" modal-footer">
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#verifikasi{{ $item['no_regis'] }}">
                                                Kembali
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{ $item['no_regis'] }}">
                                <i class="fa fa-trash"></i>
                            </button>
                            <div data-bs-backdrop="static" class="modal fade" id="delete{{$item['no_regis'] }}" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="deleteLabel">Hapus Data
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah anda yakin ingin menghapus data ini?</p>
                                        </div>
                                        <div class=" modal-footer">
                                            <form action="{{ route('pendaftar.destroy', $item['id']) }}" method="POST">@csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm d-inline-flex">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#detail{{ $item['no_regis'] }}">
                                <i class="fa fa-file"></i>
                            </button>
                            <!-- Modal Detail -->
                            <div class="modal" id="detail{{ $item['no_regis'] }}" aria-labelledby="detailLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="detailLabel">Data Santri</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="" width="700px" style="margin-left:40px">
                                                <div class="text-center mt-4">
                                                    <img width="115px" height="150px" src="../storage/uploads/photo/{{ isset($item['path_photo']) ? $item['path_photo'] : 'user-icon.png' }}" alt="">
                                                </div>
                                                <p class="fw-bold mt-4">Nomor Pendaftaran : {{ $item['no_regis'] }}</p>
                                                <ol>
                                                    <li class="fw-bold">PROFIL CALON SANTRI</li>
                                                    <table width="680px">
                                                        <tr>
                                                            <td width="200px">Nama Lengkap</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['fullname'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Panggilan</td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['nickname'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>NISN</td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['nisn'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>No. KIP<sup>*)</sup></td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['no_kip'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>No. PKH<sup>*)</sup></td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['no_pkh'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>No. KKS<sup>*)</sup></td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['no_kks'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>NIK</td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['nik'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tempat, Tanggal Lahir</td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['pob'] }}, {{ tgl_indo($item['dob']) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Golongan Darah</td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['blood'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hobi</td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['hobby'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cita - Cita</td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['purpose'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">Data Alamat Rumah (sesuai KTP)</td>
                                                            <td class="text-end"></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>&#x2022 Desa / Kelurahan</td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['address'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>&#x2022 Kecamatan</td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['sub_district'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>&#x2022 Kabupaten / Kota</td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['district'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>&#x2022 Provinsi</td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['province'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>&#x2022 Kode Pos</td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['postal_code'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>&#x2022 Kode Pos</td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['postal_code'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Status Rumah</td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['home_status'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Data Akademik</td>
                                                            <td class="text-end">:</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>&#x2022 Nama Universitas</td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['workplace'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>&#x2022 Fakultas/ Jurusan</td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['department'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>No. WA Aktif</td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['phone'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email</td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['email'] }}</td>
                                                        </tr>
                                                    </table>
                                                    <li class="fw-bold mt-4">DATA AYAH KANDUNG</li>
                                                    <table width="680px">
                                                        <tr>
                                                            <td width="200px">No.KK</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['no_kk'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="200px">NIK</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['father_nik'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="200px">Nama</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['father'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="200px">Pekerjaan</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['father_job'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="200px">Pendidikan</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['father_graduate'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="200px">Telp.</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['father_pn'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="200px">Rata- Rata Penghasilan</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['father_income'] }}</td>
                                                        </tr>
                                                    </table>
                                                    <li class="fw-bold mt-4">DATA IBU KANDUNG</li>
                                                    <table width="680px">
                                                        <tr>
                                                            <td width="200px">NIK</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['mother_nik'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="200px">Nama</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['mother'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="200px">Pekerjaan</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['mother_job'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="200px">Pendidikan</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['mother_graduate'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="200px">Telp.</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['mother_pn'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="200px">Rata- Rata Penghasilan</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['mother_income'] }}</td>
                                                        </tr>
                                                    </table>
                                                    <li class="fw-bold mt-4">DATA WALI</li>
                                                    <table width="680px">
                                                        <tr>
                                                            <td width="200px">Hubungan Wali</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['guardian_relationship'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="200px">NIK</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['guardian_nik'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="200px">Nama</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['guardian'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="200px">Pekerjaan</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['guardian_job'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="200px">Pendidikan</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['guardian_graduate'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="200px">Telp.</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['guardian_pn'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="200px">Rata- Rata Penghasilan</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['guardian_income'] }}</td>
                                                        </tr>
                                                    </table>
                                                    <li class="fw-bold mt-4">LAIN-LAIN</li>
                                                    <table width="680px">
                                                        <tr>
                                                            <td width="200px">Pilihan Program</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['program'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="200px">Motivasi Masuk Pondok</td>
                                                            <td class="text-end" width="5px">:</td>
                                                            <td>{{ $item['motivation_entry'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">Data Pondok Sebelumnya</td>
                                                            <td class="text-end"></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>&#x2022 Nama Pondok</td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['previous_pondok_name'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>&#x2022 Alamat</td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['previous_pondok_address'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>&#x2022 Jabatan </td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['previous_pondok_div'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>&#x2022 Lama Mondok</td>
                                                            <td class="text-end">:</td>
                                                            <td>{{ $item['previous_pondok_time'] }}</td>
                                                        </tr>
                                                    </table>
                                                </ol>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- </div>
    </div> --}}
    @endsection