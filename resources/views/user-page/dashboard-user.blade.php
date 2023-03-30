<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>PSB | PP. Kyai Galang Sewu</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="    https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="assets/css/template.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="css/dashboard-user-style.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky background-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <p id="psb">Penerimaan Santri Baru</p>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
                            <li class="scroll-to-section"><a href="#visi">Visi/Misi</a></li>
                            <li class="scroll-to-section"><a href="#courses">Program</a></li>
                            <li class="scroll-to-section"><a href="#ekstra">Ekstra</a></li>
                            <li class="scroll-to-section"><a href="#kuota">Kuota</a></li>
                            <li class="scroll-to-section"><a href="#flow">Alur</a></li>
                            <li class="scroll-to-section"><a href="#" data-bs-toggle="modal"
                                    data-bs-target="#loginModal">Login</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="content">
        <div class="container">
            @if (session()->has('success'))
                <div class="col-10 mx-auto alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session()->has('failed'))
                <div class="col-10 mx-auto alert alert-danger" role="alert">
                    {{ session('failed') }}
                </div>
            @endif
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 left-section">
                    <div class="row short-profile">
                        <div class="col-3 photo-profile">
                            <div id="edit-button" class="btn edit-button"><i class="fa-regular fa-pen-to-square"></i>
                            </div>
                            <img src="storage/uploads/photo/{{ isset($data['path_photo']) ? $data['path_photo'] : 'user-icon.png' }}"
                                class="img-fluid" alt="pp">
                        </div>
                        <div class="col-9 name-register">
                            <div class="row">
                                <div class="col-12 name">
                                    {{ $data['fullname'] }}
                                </div>
                                <div class="col-12 number">
                                    {{ $data['no_regis'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row menu">
                        <div class="col-12 menu-link btn" id="data-diri">
                            <p>Data Diri</p>
                        </div>
                        <div class="col-12 menu-link btn" id="dokumen">
                            <p>Dokumen</p>
                        </div>
                        <div class="col-12 menu-link btn" id="pembayaran">
                            <p>Pembayaran</p>
                        </div>
                        <div class="col-12 menu-link btn" id="cetak">
                            <p>Cetak Formulir</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 rigt-section">
                    {{-- content data diri --}}
                    <form action="/user/{{ $data['id'] }}" method="POST">
                        @csrf
                        <div class="row content-menu" id="data-diri-2">
                            <div class="col-12 title d-flex justify-content-between">
                                Data Diri
                                <div>
                                    <p style="display: none" class="btn btn-dark" id="kembali">Kembali</p>
                                </div>
                            </div>
                            {{-- profile menu --}}
                            <div class="col-12 profile-menu" id="profile-menu">
                                <div class="row">
                                    <div class="col-12 menu-link btn" id="pribadi">
                                        <p>Data Pribadi</p>
                                    </div>
                                    <div class="col-12 menu-link btn" id="kontak">
                                        <p>Kontak</p>
                                    </div>
                                    <div class="col-12 menu-link btn" id="kependudukan">
                                        <p>Kependudukan</p>
                                    </div>
                                    <div class="col-12 menu-link btn" id="pendidikan">
                                        <p>Pendidikan</p>
                                    </div>
                                    <div class="col-12 menu-link btn" id="orang-tua">
                                        <p>Data Orang Tua / Wali</p>
                                    </div>
                                </div>
                            </div>
                            {{-- end profile menu --}}
                            {{-- Data Pribadi --}}
                            <div class="col-12 self-profile" id="pribadi-2">
                                <div class="self-title">
                                    Data Pribadi
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nama Lengkap
                                    </div>
                                    <div class="content-item">
                                        <input name="fullname" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['fullname'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nama Panggilan
                                    </div>
                                    <div class="content-item">
                                        <input name="nickname" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['nickname'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Program
                                    </div>
                                    <div class="content-item">
                                        {{ $data['program'] }}
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Jenis Kelamin
                                    </div>
                                    <div class="content-item">
                                        @if ($data['option'] === '1')
                                            {{ 'Laki - Laki' }}
                                        @else
                                            {{ 'Perempuan' }}
                                        @endif
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Hobi
                                    </div>
                                    <div class="content-item">
                                        <input name="hobby" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['hobby'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Cita - Cita
                                    </div>
                                    <div class="content-item">
                                        <input name="purpose" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['purpose'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Tempat Lahir
                                    </div>
                                    <div class="content-item">
                                        <input name="pob" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['pob'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Tanggal Lahir
                                    </div>
                                    <div class="content-item">
                                        <input name="dob" type="date" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['dob'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Golongan Darah
                                    </div>
                                    <div class="content-item">
                                        <input name="blood" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['blood'] }}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                            {{-- end data pribadi --}}
                            {{-- Kontak --}}
                            <div class="col-12 self-profile" id="kontak-2">
                                <div class="self-title">
                                    Kontak
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Email
                                    </div>
                                    <div class="content-item">
                                        <input name="email" type="email" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['email'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor Whatsapp
                                    </div>
                                    <div class="content-item">
                                        <input name="phone" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['phone'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Kondisi Rumah
                                    </div>
                                    <div class="content-item">
                                        <input name="home_status" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['home_status'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Alamat Rumah
                                    </div>
                                    <div class="content-item">
                                        <input name="address" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['address'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Kecamatan
                                    </div>
                                    <div class="content-item">
                                        <input name="sub_district" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['sub_district'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Kabupaten / Kota
                                    </div>
                                    <div class="content-item">
                                        <input name="district" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['district'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Provinsi
                                    </div>
                                    <div class="content-item">
                                        <input name="province" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['province'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Kode Pos
                                    </div>
                                    <div class="content-item">
                                        <input name="postal_code" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['postal_code'] }}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                            {{-- end kontak --}}
                            {{-- Kependudukan --}}
                            <div class="col-12 self-profile" id="kependudukan-2">
                                <div class="self-title">
                                    Kependudukan
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor Induk Kependudukan ( NIK, 16 digit )
                                    </div>
                                    <div class="content-item">
                                        <input max="20" name="nik" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['nik'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor Kartu Keluarga ( KK, 16 digit )
                                    </div>
                                    <div class="content-item">
                                        <input max="20" name="no_kk" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['no_kk'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor Induk Siswa Nasional ( NISN, 10 digit )
                                    </div>
                                    <div class="content-item">
                                        <input max="10" name="nisn" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['nisn'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor Kartu Indonesia Pintar ( KIP, 6 digit )
                                    </div>
                                    <div class="content-item">
                                        <input max="10" name="no_kip" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['no_kip'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor Kartu Keluarga Sejahtera ( KKS, 6 digit )
                                    </div>
                                    <div class="content-item">
                                        <input max="20" name="no_kks" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['no_kks'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor Program Keluarga Harapan ( PKH, 6 digit )
                                    </div>
                                    <div class="content-item">
                                        <input max="10" name="no_pkh" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['no_pkh'] }}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                            {{-- end kependudukan --}}
                            {{-- Pendidikan --}}
                            <div class="col-12 self-profile" id="pendidikan-2">
                                <div class="self-title">
                                    Pendidikan
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Universitas/Sekolah
                                    </div>
                                    <div class="content-item">
                                        <input name="workplace" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['workplace'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Jurusan
                                    </div>
                                    <div class="content-item">
                                        <input name="department" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['department'] }}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                            {{-- end pendidikan --}}
                            {{-- Orang Tua --}}
                            <div class="col-12 self-profile" id="orang-tua-2">
                                <div class="self-title">
                                    Data Orang Tua / Wali
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nama Ayah
                                    </div>
                                    <div class="content-item">
                                        <input name="father" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['father'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor Whatsapp / HP Ayah
                                    </div>
                                    <div class="content-item">
                                        <input name="father_pn" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['father_pn'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor NIK Ayah
                                    </div>
                                    <div class="content-item">
                                        <input name="father_nik" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['father_nik'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Pekerjaan Ayah
                                    </div>
                                    <div class="content-item">
                                        <input name="father_job" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['father_job'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Pendidikan Ayah
                                    </div>
                                    <div class="content-item">
                                        <input name="father_graduate" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['father_graduate'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Pendapatan Ayah
                                    </div>
                                    <div class="content-item">
                                        <input name="father_income" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['father_income'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nama Ibu
                                    </div>
                                    <div class="content-item">
                                        <input name="mother" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['mother'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor Whatsapp / HP Ibu
                                    </div>
                                    <div class="content-item">
                                        <input name="mother_pn" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['mother_pn'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor NIK Ibu
                                    </div>
                                    <div class="content-item">
                                        <input name="mother_nik" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['mother_nik'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Pekerjaan Ibu
                                    </div>
                                    <div class="content-item">
                                        <input name="mother_job" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['mother_job'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Pendidikan Ibu
                                    </div>
                                    <div class="content-item">
                                        <input name="mother_graduate" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['mother_graduate'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Pendapatan Ibu
                                    </div>
                                    <div class="content-item">
                                        <input name="mother_income" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['mother_income'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nama Wali
                                    </div>
                                    <div class="content-item">
                                        <input name="guardian" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['guardian'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor Whatsapp / HP Wali
                                    </div>
                                    <div class="content-item">
                                        <input name="guardian_pn" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['guardian_pn'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor NIK Wali
                                    </div>
                                    <div class="content-item">
                                        <input name="guardian_nik" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['guardian_nik'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Pekerjaan Wali
                                    </div>
                                    <div class="content-item">
                                        <input name="guardian_job" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['guardian_job'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Pendidikan Wali
                                    </div>
                                    <div class="content-item">
                                        <input name="guardian_graduate" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['guardian_graduate'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Pendapatan Wali
                                    </div>
                                    <div class="content-item">
                                        <input name="guardian_income" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['guardian_income'] }}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                            {{-- end Orang Tua --}}
                        </div>
                    </form>
                    {{-- end content data diri --}}
                    {{-- content dokumen --}}
                    <div class="row content-menu" id="dokumen-2">
                        <div class="col-12 title">
                            Dokumen
                        </div>
                        <div class="col-12 self-profile">
                            <div class="self-title">
                                Masukan Dokumen
                            </div>
                            <form action="/doc/{{ $data['id'] }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="item-profile">
                                    <div class="title-item">
                                        Scan Surat Pernyataan, KTP, dan KK ( Dalam 1 dokumen PDF )
                                    </div>
                                    <div class="content-item">
                                        <input required name="path_doc" class="form-control" type="file"
                                            id="formFile">
                                    </div>
                                    <button type="submit" class="my-3 btn btn-success">Simpan</button>
                                </div>
                            </form>
                            @if ($data['path_doc'] !== null)
                                <iframe id="iframepdf" style="width: 100%; height:100vh"
                                    src="storage/uploads/doc/{{ $data['path_doc'] }}"></iframe>
                            @endif

                        </div>
                    </div>
                    {{-- end content dokumen --}}
                    {{-- content pembayaran --}}
                    <div class="row content-menu" id="pembayaran-2">
                        <div class="col-12 title">
                            Pembayaran
                        </div>
                        <div class="col-12 self-profile">
                            <div class="self-title">
                                Masukan Bukti Pembayaran
                            </div>
                            <form action="/bill/{{ $data['id'] }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="item-profile">
                                    <div class="title-item">
                                        Bukti Pembayaran
                                    </div>
                                    <div class="content-item">
                                        <input required name="path_bill" class="form-control" type="file"
                                            id="formFile">
                                    </div>
                                    <button type="submit" class="my-3 btn btn-success">Simpan</button>
                                </div>
                            </form>
                            @if ($data['path_bill'] !== null)
                                <iframe id="iframepdf" style="width: 100%; height:100vh"
                                    src="storage/uploads/doc/{{ $data['path_bill'] }}"></iframe>
                            @endif
                        </div>
                    </div>
                    {{-- end content pembayaran --}}
                    {{-- content cetak formulir --}}
                    <div class="row content-menu" id="cetak-2">
                        <div class="col-12 title">
                            Cetak Formulir
                        </div>
                        <div class="col-12 self-profile">
                            <div class="self-title">
                                Silakan Cetak Formulir
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Formulir Pendaftaran
                                </div>
                                <div class="content-item">
                                    @if ($data['status'] == 1)
                                        <a target="_blank" href="/print/{{ Crypt::encryptString($data['id']) }}"
                                            class="btn btn-primary"> Cetak</a>
                                    @else
                                        {{ 'Masih dalam proses verifikasi' }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end content cetak formulir --}}
                    {{-- content edit pp --}}
                    <div class="row content-menu" style="display: none" id="edit-photo">
                        <div class="col-12 title d-flex justify-content-between">
                            Edit Poto Profil
                            <div>
                                <p class="btn btn-dark" id="kembali-edit-foto">Kembali</p>
                            </div>
                        </div>
                        <div class="col-12 self-profile">
                            <div class="self-title">
                                Edit Foto
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Upload Foto
                                </div>
                                <form action="/photo/{{ $data['id'] }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="content-item">
                                        <input name="path_photo" class="form-control" type="file" id="formFile"
                                            required>
                                    </div>
                                    <button type="submit" class="my-3 btn btn-success">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- end content edit pp --}}
                </div>
            </div>
        </div>

    </section>


    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Dibuat dengan &hearts; oleh KGS Devnet. &nbsp;&nbsp;&nbsp; Contact: <a
                        href="http://wa.me/6285280009949" target="_blank" rel="noopener noreferrer">085280009949
                        (putra)</a> -
                    <a href="http://wa.me/6285280009930" target="_blank" rel="noopener noreferrer">085280009930
                        (putri)</a></a>
                </p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src=" assets/js/counter.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="js/dashboard-user.js"></script>

</body>

</html>
