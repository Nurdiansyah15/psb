<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>PSB - Kyai Galang Sewu</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="    https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="assets/css/template.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="css/landing-style.css">
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
                            <li class="scroll-to-section"><a href="#courses">Login</a></li>

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
    <!-- ***** Header Area End ***** -->
    <div class="banner" id="top">
        <div class="container-fluid">
            <div class="row background" style="background-image: url({{ asset('/img/banner2.jpg') }})">
                <div class="col-5 title">
                    <div class="title-content">
                        <div class="title-ponpes">
                            <span>Pondok Pesantren </span>
                            <p>Kyai Galang Sewu</p>
                            <span>Ala Ahlussunnah Wal Jama'ah </span>
                        </div>
                        <div class="sub-title-ponpes">
                            <p>Kota Semarang, Jawa Tengah</p>
                        </div>
                        <div class="buttons mt-2">
                            <div class="main-button">
                                <a href="#">Pendaftaran</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5 logo-pondok">
                    <img src="assets/images/logo.png" alt="logo" srcset="">
                </div>
                {{-- <div class="col-lg-12">
                    <div class="owl-carousel owl-banner">
                        <div class="item item-1">
                            <div class=" row">
                                <div class="col">
                                    <h2>Kyai Galang Sewu</h2>
                                    <p>Tembalang, Kota Semarang, Jawa Tengah</p>

                                </div>
                                <div class="col d-flex align-items-center">
                                    <img src="assets/images/logo.png" alt="" srcset="">
                                </div>


                            </div>
                        </div>

                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="section about-us ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Visi
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Mencetak Generasi Muda yang Berkualitas di Bidang Ilmu Agama, Ilmu Umum, dan
                                    Berkepribadian Akhlakul Karimah serta Menjalankan Syari’at Islam ala Ahlussunah Wal
                                    Jama’ah
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Misi
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul style="list-style-position: outside;">
                                        <li>&bull; Menanamkan nilai-nilai keislaman dalam aktivitas sehari-hari</li>
                                        <li>&bull; Membangkitkan semangat santri untuk senantiasa aktif dalam mengikuti
                                            majelis
                                            pengajian Al-qur’an maupun kitab di pondok</li>
                                        <li>&bull; Menciptakan santri yang siap untuk terjun di masyarakat</li>
                                        <li>&bull; Menciptakan suasana gotong-royong dan saling membantu antar santri
                                        </li>
                                        <li>&bull; Menjalin hubungan baik dengan masyarakat serta berbagai pihak dalam
                                            pengembangan pesantren yang unggul dan agamis</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h2>Selayang Pandang</h2>
                        <p>Pondok pesantren Kyai Galang Sewu merupakan pondok pesantren yang berpegang teguh pada
                            Al-Qur’an , Hadits, Ijma’, Qiyas dan para ulama Ahlussunnah wal jamaah. Ponpes Kyai Galang
                            Sewu juga menjunjung tinggi nilai-nilai Pancasila, UUD 1945, dan Bhinneka Tunggal Ika
                            sebagai benteng dari pergolakan massa di Indonesia.
                            Pondok Pesantren ini resmi didirikan pada tanggal 16 Agustus 1999 atas rintisan KH. M.
                            Sam’ani Khoiruddin, S.Ag. Letaknya yang berada di kawasan kampus Universitas Diponegoro
                            menjadikan Ponpes Kyai Galang Sewu menjadi pilihan tepat bagi mahasiswa yang ingin menuntut
                            ilmu sembari memperdalam ilmu agama.
                            dalam rangka meningkatkan kualitas pendidikan santri, Ponpes Kyai Galang Sewu memberikan
                            pengajaran ilmu-ilmu di bidang Tauhid, Tajwid, Tafsir, Akhlaq, Fiqih, Nahwu, Shorof, dan
                            lain-lain.</p>
                        {{-- <div class="main-button">
                            <a href="#">Discover More</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="services section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Jurusan</h6>
                        <h2>JURUSAN</h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="assets/images/service-01.png" alt="online degrees">
                        </div>
                        <div class="main-content">
                            <h4>Tahfidz Qur'an</h4>
                            <p>Jurusan Tahfidz Qur'an merupakan program jurusan hafalan 30 juz Al Qur’an yang bersanad
                                sampai kepada Kiai Arwani Kudus hingga akhirnya bermuara pada baginda Rasulullah SAW.
                            </p>
                            {{-- <div class="main-button">
                                <a href="#">Read More</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="assets/images/service-02.png" alt="short courses">
                        </div>
                        <div class="main-content">
                            <h4>Kitab</h4>
                            <p>Jurusan Kitab merupakan program jurusan yang difokuskan untuk mengkaji kitab kuning /
                                kitab gundul yang berisi pelajaran agama islam (diraasah al-islamiyyah), mulai dari
                                fiqh, aqidah, akhlaq/tasawuf, atur bahasa arab (`ilmu nahwu dan `ilmu sharf), hadits,
                                tafsir, `ulumul qur'aan, hingga pada ilmu sosial dan kemasyarakatan (mu`amalah).</p>
                            {{-- <div class="main-button">
                                <a href="#">Read More</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>EKSTRA</h6>
                        <h2>EKSTRAKULIKULER</h2>
                    </div>
                </div>
            </div>
            <ul class="event_filter">
                <li>
                    <a class="is_active" href="#!" data-filter="*">Tampilkan Semua</a>
                </li>
                <li>
                    <a href="#!" data-filter=".putra">Putra</a>
                </li>
                <li>
                    <a href="#!" data-filter=".putri">Putri</a>
                </li>
            </ul>
            <div class="row event_box">
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 putra putri">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/course-01.jpg" alt=""></a>
                            <span class="category">Putra / Putri</span>

                        </div>
                        <div class="down-content">
                            <span class="author">Musik</span>
                            <h4>Rebana</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 putra ">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/course-02.jpg" alt=""></a>
                            <span class="category">Putra </span>

                        </div>
                        <div class="down-content">
                            <span class="author">Streaming</span>
                            <h4>KGS TV</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 putra putri">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/course-03.jpg" alt=""></a>
                            <span class="category">Putra / Putri</span>

                        </div>
                        <div class="down-content">
                            <span class="author">Desain Media</span>
                            <h4>KGS Media</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 putra putri">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/course-04.jpg" alt=""></a>
                            <span class="category">Putra / Putri</span>

                        </div>
                        <div class="down-content">
                            <span class="author">Teknologi</span>
                            <h4>Dev Net</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 putra putri">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/course-05.jpg" alt=""></a>
                            <span class="category">Putra / Putri</span>

                        </div>
                        <div class="down-content">
                            <span class="author">Kesehatan</span>
                            <h4>Puskestren</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 putra putri">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/course-06.jpg" alt=""></a>
                            <span class="category">Putra / Putri</span>

                        </div>
                        <div class="down-content">
                            <span class="author">Olahraga</span>
                            <h4>Silat</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 putra putri">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/course-06.jpg" alt=""></a>
                            <span class="category">Putra / Putri</span>
                            <span class="price">
                                <h6>Baru</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">Kesenian</span>
                            <h4>KGS Kaligrafi</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 putra">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/course-06.jpg" alt=""></a>
                            <span class="category">Putra </span>

                        </div>
                        <div class="down-content">
                            <span class="author">Manajemen Suara</span>
                            <h4>KGS Sound</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 putra putri">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/course-06.jpg" alt=""></a>
                            <span class="category">Putra / Putri</span>
                            <span class="price">
                                <h6>Baru</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">Penelitian / Sains</span>
                            <h4>KGS RNE</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="100" data-speed="1000"></h2>
                                    <p class="count-text ">Kuota Putra</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="804" data-speed="1000"></h2>
                                    <p class="count-text ">Kuota Putri</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="50" data-speed="1000"></h2>
                                    <p class="count-text ">Kuota Putra Terisi</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter end">
                                    <h2 class="timer count-title count-number" data-to="9" data-speed="1000"></h2>
                                    <p class="count-text ">Kuota Putri Terisi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team section" id="team">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="assets/images/member-02.jpg" alt="">
                            <span class="category"> Pengasuh</span>
                            <h6>Bapak K.H. M Nur Salafudin A.H.</h6>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="assets/images/member-04.jpg" alt="">
                            <span class="category">Pengasuh</span>
                            <h6>Bapak K.H.R M Sam'ani Khoiruddin </h6>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="assets/images/member-03.jpg" alt="">
                            <span class="category">Pengasuh</span>
                            <h6 class="category">Bapak Ust. Ulin Nuha Aba M.Si.</h6>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="owl-carousel owl-testimonials">
                        <div class="item">
                            <p>“Janganlah kamu menjadikan alasan kebodohanmu di hadapan Allah SWT, karena Allah SWT
                                menuntutmu mencari ilmu, bukan menuntutmu untuk pandai.”</p>
                            <div class="author">
                                <img src="assets/images/abdillah.jpg" alt="">
                                <span class="category">Pengajar</span>
                                <h4>K. Abdillah Matori, S.Pd.I</h4>
                            </div>
                        </div>
                        <div class="item">
                            <p>“Seberapa besar kita memuliakan Al-Quran, sebesar itupula Allah memuliakan kita”</p>
                            <div class="author">
                                <img src="assets/images/bapak.jpg" alt="">
                                <span class="category">Pengasuh</span>
                                <h4>K.M. Nur Salafudin A.H</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>Dawuh Guru</h6>
                        <h2>Apa Kata mereka?</h2>
                        <p>Kamu ingin belajar di Pondok Pesantren ? Tapi masih mikir mikir dulu ? Tenang, biar kamu bisa
                            memantapkan hatimu, yuk simak apa yang para guru sampaikan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section events" id="events">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Timeline</h6>
                        <h2>Jadwal Penerimaan Santri</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="assets/images/event-01.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">online</span>
                                        <h4>Pendaftaran</h4>
                                    </li>
                                    <li>
                                        <span>Tanggal:</span>
                                        <h6>28 Mar 2023 - 19 April 2023</h6>
                                    </li>
                                </ul>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="assets/images/event-02.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">online</span>
                                        <h4>Verifikasi Berkas</h4>
                                    </li>
                                    <li>
                                        <span>Tanggal:</span>
                                        <h6>28 Mar 2023 - 19 April 2023</h6>
                                    </li>
                                    <li>
                                        <span>Duration:</span>
                                        <h6>30 Hours</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="assets/images/event-03.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">online</span>
                                        <h4>Pembayaran </h4>
                                    </li>
                                    <li>
                                        <span>Tanggal:</span>
                                        <h6>28 Mar 2023 - 19 April 2023</h6>
                                    </li>
                                    <li>
                                        <span>Duration:</span>
                                        <h6>48 Hours</h6>
                                    </li>
                                    <a href="#" onclick="return func(0)" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa fa-angle-right"></i></a>
                                    <!-- Button trigger modal -->



                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="assets/images/event-03.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">offline</span>
                                        <h4>Mengumpulkan Berkas </h4>
                                    </li>

                                    <li>
                                        <span>Tempat:</span>
                                        <h6>PP Kyai Galang Sewu</h6>
                                    </li>

                                    <a href="https://goo.gl/maps/3jCsuCYQzofVRm3CA">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </a>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="assets/images/event-03.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">offline</span>
                                        <h4>Masuk Pondok </h4>
                                    </li>

                                    <li>
                                        <span>Tempat:</span>
                                        <h6>PP Kyai Galang Sewu</h6>
                                    </li>

                                    <a href="https://goo.gl/maps/3jCsuCYQzofVRm3CA">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </a>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pembayaran</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mt-2">
                            <div class="col-4">
                                <span class="category">
                                    Santri putra</span>
                            </div>
                            <div class="col">
                                <h5>5995-01-023943-53-8</h5>
                                <h6>a/n Muhammad Ainun Ni`am (BRI)</h6>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-4">
                                <span class="category">Santri putri</span>
                            </div>
                            <div class="col">
                                <h5>5918-01-017999-53-1</h5>
                                <h6>a/n Saniyatin (BRI)</h6>
                            </div>

                        </div>


                        <div class="mt-3"><strong class="text-danger">* Upload bukti pembayaran dan konfirmasi ke
                                nomor pengurus</strong></div>
                        <p class="mt-3">
                            Pembayaran dapat dicicil 3x dalam waktu 1 tahun
                            Minimal pembayaran pertama sebesar Rp 400.000,-
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" style="color:white;background-color: #F08A5D"
                            data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  align-self-center">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h2>Feel free to contact us anytime</h2>
                        <p>Pertanyaan belum dijawab? kami di sini untuk membantu!</p>
                        <div class="special-offer">
                            <span class="offer">off<br><em>50%</em></span>
                            <h6>Valide: <em>24 April 2023</em></h6>
                            <h4>Special Offer <em>50%</em> OFF!</h4>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Dibuat dengan &hearts; oleh KGS Devnet. &nbsp;&nbsp;&nbsp; Contact: <a href="https://templatemo.com"
                        rel="nofollow" target="_blank">0888888 (Humas)</a></p>
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

</body>

</html>
