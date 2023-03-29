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
                            <p>Penerimaan Santri Baru</p>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#video">Video</a></li>
                            <li class="scroll-to-section"><a href="#visi">Visi/Misi</a></li>
                            <li class="scroll-to-section"><a href="#courses">Jurusan</a></li>
                            <li class="scroll-to-section"><a href="#kuota">Kuota</a></li>
                            <li class="scroll-to-section"><a href="#ekstra">Ekstra</a></li>
                            <li class="scroll-to-section"><a href="#flow">Alur Pendaftaran</a></li>

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
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 left-section">
                    <div class="row short-profile">
                        <div class="col-3 photo-profile">
                            <img src="img/bapak2.jpg" class="img-fluid" alt="pp">
                        </div>
                        <div class="col-9 name-register">
                            <div class="row">
                                <div class="col-12 name">
                                    Nurdiansyah
                                </div>
                                <div class="col-12 number">
                                    1000120001
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
                    <div class="row content-menu" id="data-diri-2">
                        <div class="col-12 title d-flex justify-content-between">
                            Data Diri
                            <p style="display: none" class="btn btn-dark" id="kembali">Kembali</p>
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
                                    Nurdiansyah
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Nama Panggilan
                                </div>
                                <div class="content-item">
                                    iyan
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Program
                                </div>
                                <div class="content-item">
                                    Kitab
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Jenis Kelamin
                                </div>
                                <div class="content-item">
                                    Laki-Laki
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Hobi
                                </div>
                                <div class="content-item">
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        value="Main Bola">
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Cita - Cita
                                </div>
                                <div class="content-item">
                                    Presiden
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Tempat Lahir
                                </div>
                                <div class="content-item">
                                    Brebes
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Tanggal Lahir
                                </div>
                                <div class="content-item">
                                    15 September 2000
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Golongan Darah
                                </div>
                                <div class="content-item">
                                    A+
                                </div>
                            </div>
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
                                    nurdiansyah@gmail.com
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Nomor Whatsapp
                                </div>
                                <div class="content-item">
                                    08123441223
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Kondisi Rumah
                                </div>
                                <div class="content-item">
                                    Baik
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Alamat Rumah
                                </div>
                                <div class="content-item">
                                    Jl. Cikakak Nomor 12 RT 25 RW 23 Desa Cikakak
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Kecamatan
                                </div>
                                <div class="content-item">
                                    Banjarharjo
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Kabupaten
                                </div>
                                <div class="content-item">
                                    Brebes
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Provinsi
                                </div>
                                <div class="content-item">
                                    Jawa Tengah
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Kode Pos
                                </div>
                                <div class="content-item">
                                    52265
                                </div>
                            </div>
                        </div>
                        {{-- end kontak --}}
                        {{-- Kependudukan --}}
                        <div class="col-12 self-profile" id="kependudukan-2">
                            <div class="self-title">
                                Kependudukan
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Nomor Induk Kependudukan ( NIK )
                                </div>
                                <div class="content-item">
                                    2829282928292829
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Nomor Kartu Keluarga ( KK )
                                </div>
                                <div class="content-item">
                                    2829282928292829
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Nomor Kartu Keluarga ( KK )
                                </div>
                                <div class="content-item">
                                    2829282928292829
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Nomor Induk Siswa Nasional ( NISN )
                                </div>
                                <div class="content-item">
                                    0002828291
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Nomor Kartu Indonesia Pintar ( KIP )
                                </div>
                                <div class="content-item">
                                    00101001010
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Nomor Kartu Keluarga Sejahtera ( KKS )
                                </div>
                                <div class="content-item">
                                    0000009990
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Nomor Program Keluarga Harapan ( PKH )
                                </div>
                                <div class="content-item">
                                    1111000199
                                </div>
                            </div>
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
                                    Universitas Diponegoro
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Jurusan
                                </div>
                                <div class="content-item">
                                    Fisika
                                </div>
                            </div>

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
                                    Waruum
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Nomor Whatsapp / HP Ayah
                                </div>
                                <div class="content-item">
                                    0099009999887
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Nomor NIK Ayah
                                </div>
                                <div class="content-item">
                                    12200202002020
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Pekerjaan Ayah
                                </div>
                                <div class="content-item">
                                    Petani Kurma
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Pendidikan Ayah
                                </div>
                                <div class="content-item">
                                    Sekolah Dasar
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Pendapatan Ayah
                                </div>
                                <div class="content-item">
                                    Sekolah Dasar
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Nama Ibu
                                </div>
                                <div class="content-item">
                                    Waruum
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Nomor Whatsapp / HP Ibu
                                </div>
                                <div class="content-item">
                                    0099009999887
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Nomor NIK Ibu
                                </div>
                                <div class="content-item">
                                    12200202002020
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Pekerjaan Ibu
                                </div>
                                <div class="content-item">
                                    Petani Kurma
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Pendidikan Ibu
                                </div>
                                <div class="content-item">
                                    Sekolah Dasar
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Pendapatan Ibu
                                </div>
                                <div class="content-item">
                                    Sekolah Dasar
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Nama Wali
                                </div>
                                <div class="content-item">
                                    Waruum
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Nomor Whatsapp / HP Wali
                                </div>
                                <div class="content-item">
                                    0099009999887
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Nomor NIK Wali
                                </div>
                                <div class="content-item">
                                    12200202002020
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Pekerjaan Wali
                                </div>
                                <div class="content-item">
                                    Petani Kurma
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Pendidikan Wali
                                </div>
                                <div class="content-item">
                                    Sekolah Dasar
                                </div>
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Pendapatan Wali
                                </div>
                                <div class="content-item">
                                    Sekolah Dasar
                                </div>
                            </div>
                        </div>
                        {{-- end Orang Tua --}}
                    </div>
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
                            <div class="item-profile">
                                <div class="title-item">
                                    Scan Surat Pernyataan, KTP, dan KK ( Dalam 1 dokumen PDF )
                                </div>
                                <div class="content-item">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
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
                            <div class="item-profile">
                                <div class="title-item">
                                    Bukti Pembayaran
                                </div>
                                <div class="content-item">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
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
                                    <button class="btn btn-primary"> Cetak</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end content cetak formulir --}}
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
