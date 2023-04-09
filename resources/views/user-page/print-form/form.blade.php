<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Formulir Pendafaran {{ $data['no_regis'] }}</title>
    <style type="text/css">
        ;

        body {
            font-family: 'Times New Roman';
            font-size: 12pt;
        }

        p {
            font-family: 'Times New Roman';
            font-size: 12pt;
        }

        div {
            font-family: 'Times New Roman';
            font-size: 12pt;
        }
    </style>
</head>

<body onload="window.print()">
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
    <div class="" width="700px" style="margin-left:40px">
        <table width="700px">
            <tr>
                <td style="border-bottom:3px solid black ">
                    <img width="70%"src="{{ asset('img/kop.png') }}" alt="">
                </td>
            </tr>
        </table>
        <div class="text-center fw-bold">
            FORMULIR PENDAFTARAN SANTRI<br>
            PONDOK PESANTREN KYAI GALANG SEWU<br>
            TAHUN AJARAN 20{{ substr($data['no_regis'], 5, 2) }} - 20{{ intval(substr($data['no_regis'], 5, 2)) + 1 }}
        </div>
        <div class="text-center mt-4">
            <img width="115px" height="150px"
                src="../storage/uploads/photo/{{ isset($data['path_photo']) ? $data['path_photo'] : 'user-icon.png' }}"
                alt="">
        </div>
        <p class="fw-bold mt-4">Nomor Pendaftaran : {{ $data['no_regis'] }}</p>
        <ol>
            <li class="fw-bold">PROFIL CALON SANTRI</li>
            <table width="680px">
                <tr>
                    <td width="200px">Nama Lengkap</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['fullname'] }}</td>
                </tr>
                <tr>
                    <td>Nama Panggilan</td>
                    <td class="text-end">:</td>
                    <td>{{ $data['nickname'] }}</td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td class="text-end">:</td>
                    <td>{{ $data['nisn'] }}</td>
                </tr>
                <tr>
                    <td>No. KIP<sup>*)</sup></td>
                    <td class="text-end">:</td>
                    <td>{{ $data['no_kip'] }}</td>
                </tr>
                <tr>
                    <td>No. PKH<sup>*)</sup></td>
                    <td class="text-end">:</td>
                    <td>{{ $data['no_pkh'] }}</td>
                </tr>
                <tr>
                    <td>No. KKS<sup>*)</sup></td>
                    <td class="text-end">:</td>
                    <td>{{ $data['no_kks'] }}</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td class="text-end">:</td>
                    <td>{{ $data['nik'] }}</td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td class="text-end">:</td>
                    <td>{{ $data['pob'] }}, {{ tgl_indo($data['dob']) }}</td>
                </tr>
                <tr>
                    <td>Golongan Darah</td>
                    <td class="text-end">:</td>
                    <td>{{ $data['blood'] }}</td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td class="text-end">:</td>
                    <td>{{ $data['hobby'] }}</td>
                </tr>
                <tr>
                    <td>Cita - Cita</td>
                    <td class="text-end">:</td>
                    <td>{{ $data['purpose'] }}</td>
                </tr>
                <tr>
                    <td colspan="3">Data Alamat Rumah (sesuai KTP)</td>
                    <td class="text-end"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>&#x2022 Desa / Kelurahan</td>
                    <td class="text-end">:</td>
                    <td>{{ $data['address'] }}</td>
                </tr>
                <tr>
                    <td>&#x2022 Kecamatan</td>
                    <td class="text-end">:</td>
                    <td>{{ $data['sub_district'] }}</td>
                </tr>
                <tr>
                    <td>&#x2022 Kabupaten / Kota</td>
                    <td class="text-end">:</td>
                    <td>{{ $data['district'] }}</td>
                </tr>
                <tr>
                    <td>&#x2022 Provinsi</td>
                    <td class="text-end">:</td>
                    <td>{{ $data['province'] }}</td>
                </tr>
                <tr>
                    <td>&#x2022 Kode Pos</td>
                    <td class="text-end">:</td>
                    <td>{{ $data['postal_code'] }}</td>
                </tr>
                <tr>
                    <td>&#x2022 Kode Pos</td>
                    <td class="text-end">:</td>
                    <td>{{ $data['postal_code'] }}</td>
                </tr>
                <tr>
                    <td>Status Rumah</td>
                    <td class="text-end">:</td>
                    <td>{{ $data['home_status'] }}</td>
                </tr>
                <tr>
                    <td>Data Akademik</td>
                    <td class="text-end">:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>&#x2022 Nama Universitas</td>
                    <td class="text-end">:</td>
                    <td>{{ $data['workplace'] }}</td>
                </tr>
                <tr>
                    <td>&#x2022 Fakultas/ Jurusan</td>
                    <td class="text-end">:</td>
                    <td>{{ $data['department'] }}</td>
                </tr>
                <tr>
                    <td>No. WA Aktif</td>
                    <td class="text-end">:</td>
                    <td>{{ $data['phone'] }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td class="text-end">:</td>
                    <td>{{ $data['email'] }}</td>
                </tr>
            </table>
            <li class="fw-bold mt-4">DATA AYAH KANDUNG</li>
            <table width="680px">
                <tr>
                    <td width="200px">No.KK</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['no_kk'] }}</td>
                </tr>
                <tr>
                    <td width="200px">NIK</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['father_nik'] }}</td>
                </tr>
                <tr>
                    <td width="200px">Nama</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['father'] }}</td>
                </tr>
                <tr>
                    <td width="200px">Pekerjaan</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['father_job'] }}</td>
                </tr>
                <tr>
                    <td width="200px">Pendidikan</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['father_graduate'] }}</td>
                </tr>
                <tr>
                    <td width="200px">Telp.</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['father_pn'] }}</td>
                </tr>
                <tr>
                    <td width="200px">Rata- Rata Penghasilan</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['father_income'] }}</td>
                </tr>
            </table>
            <li class="fw-bold mt-4">DATA IBU KANDUNG</li>
            <table width="680px">
                <tr>
                    <td width="200px">NIK</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['mother_nik'] }}</td>
                </tr>
                <tr>
                    <td width="200px">Nama</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['mother'] }}</td>
                </tr>
                <tr>
                    <td width="200px">Pekerjaan</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['mother_job'] }}</td>
                </tr>
                <tr>
                    <td width="200px">Pendidikan</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['mother_graduate'] }}</td>
                </tr>
                <tr>
                    <td width="200px">Telp.</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['mother_pn'] }}</td>
                </tr>
                <tr>
                    <td width="200px">Rata- Rata Penghasilan</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['mother_income'] }}</td>
                </tr>
            </table>
            <li class="fw-bold mt-4">DATA WALI</li>
            <table width="680px">
                <tr>
                    <td width="200px">Hubungan Wali</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['guardian_relationship'] }}</td>
                </tr>
                <tr>
                    <td width="200px">NIK</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['guardian_nik'] }}</td>
                </tr>
                <tr>
                    <td width="200px">Nama</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['guardian'] }}</td>
                </tr>
                <tr>
                    <td width="200px">Pekerjaan</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['guardian_job'] }}</td>
                </tr>
                <tr>
                    <td width="200px">Pendidikan</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['guardian_graduate'] }}</td>
                </tr>
                <tr>
                    <td width="200px">Telp.</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['guardian_pn'] }}</td>
                </tr>
                <tr>
                    <td width="200px">Rata- Rata Penghasilan</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['guardian_income'] }}</td>
                </tr>
            </table>
            <li class="fw-bold mt-4">LAIN-LAIN</li>
            <table width="680px">
                <tr>
                    <td width="200px">Pilihan Program</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['program'] }}</td>
                </tr>
                <tr>
                    <td width="200px">Motivasi Masuk Pondok</td>
                    <td class="text-end" width="5px">:</td>
                    <td>{{ $data['motivation_entry'] }}</td>
                </tr>
                <tr>
                    <td colspan="3">Data Pondok Sebelumnya</td>
                    <td class="text-end"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>&#x2022 Nama Pondok</td>
                    <td class="text-end">:</td>
                    <td>{{ $data['previous_pondok_name'] }}</td>
                </tr>
                <tr>
                    <td>&#x2022 Alamat</td>
                    <td class="text-end">:</td>
                    <td>{{ $data['previous_pondok_address'] }}</td>
                </tr>
                <tr>
                    <td>&#x2022 Jabatan </td>
                    <td class="text-end">:</td>
                    <td>{{ $data['previous_pondok_div'] }}</td>
                </tr>
                <tr>
                    <td>&#x2022 Lama Mondok</td>
                    <td class="text-end">:</td>
                    <td>{{ $data['previous_pondok_time'] }}</td>
                </tr>
            </table>
        </ol>
        <div class="text-center">
            <table width="700px">
                <tr>
                    <td class="text-primary">
                        {!! QrCode::size(100)->generate('admin/' . asset($data['no_regis'] . '/herreg')) !!}
                    </td>
                    <td width="250px">
                        Semarang, {{ tgl_indo(date('Y-m-d')) }}<br>
                        Hormat Saya<br>
                        <br>
                        <br>
                        {{ $data['fullname'] }}
                    </td>
                </tr>
            </table>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
