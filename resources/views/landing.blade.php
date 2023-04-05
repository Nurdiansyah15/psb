@extends('template.global')
@section('content')
    <div class="banner mt-3 " id="top">
        <div class="container-fluid">
            <div class="row background" style="background-image: url({{ asset('/img/banner2.jpg') }})">
                <div class="psb-f mt-md-0 mt-5 col-md-5 d-flex align-items-center justify-content-center logo-pondok">
                    <img src="assets/images/logo.png" alt="logo" srcset="">
                </div>
                <div class="col-md-5 d-flex align-items-center justify-content-center title">
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
                                @if (session('id') === null)
                                    <a href="#daftar">Pendaftaran</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <section class="section" id="video">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        {{-- <h6>EKSTRA</h6> --}}
                        <h2>VIDEO PERKENALAN <i class="fa-brands fa-youtube"></i></h2>
                        <div class="video-container">
                            <iframe style="border: dashed 2px #146C94;padding:5px" width="100%" height="40%"
                                src="https://www.youtube.com/embed/FXc8zE2Hr6Q">
                            </iframe>

                        </div>

                    </div>
                </div>
            </div>
    </section>
    <div class="section about-us ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1">
                    <span id="visi" style="margin-top: -60px"></span>
                    <div class="accordion" id="accordionExample">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Visi
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Mencetak Generasi Muda yang Berkualitas di Bidang Ilmu Agama, Ilmu Umum, dan
                                    Berkepribadian Akhlakul Karimah serta Menjalankan Syari’at Islam ala Ahlussunah
                                    Wal
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
                                    <div class="row">
                                        <div class="col-1">&bull;</div>
                                        <div class="col-11">Menanamkan nilai-nilai keislaman dalam aktivitas
                                            sehari-hari</div>


                                    </div>
                                    <div class="row">

                                        <div class="col-1">&bull;</div>
                                        <div class="col-11">Membangkitkan semangat santri untuk senantiasa aktif dalam
                                            mengikuti
                                            majelis
                                            pengajian Al-qur’an maupun kitab di pondok</div>
                                    </div>
                                    <div class="row">

                                        <div class="col-1">&bull;</div>
                                        <div class="col-11">Menciptakan santri yang siap untuk terjun di masyarakat
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-1">&bull;</div>
                                        <div class="col-11">Menciptakan suasana gotong-royong dan saling membantu antar
                                            santri
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1">&bull;</div>
                                        <div class="col-11">Menjalin hubungan baik dengan masyarakat serta berbagai
                                            pihak
                                            dalam
                                            pengembangan pesantren yang unggul dan agamis</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h2>Selayang Pandang</h2>
                        <p style="text-align: justify; text-indent:1.2cm">Pondok pesantren Kyai Galang Sewu merupakan
                            pondok pesantren yang
                            berpegang teguh pada Al-Qur’an , Hadits, Ijma’, Qiyas dan para ulama Ahlussunnah wal jamaah.
                            Ponpes Kyai Galang Sewu juga menjunjung tinggi nilai-nilai Pancasila, UUD 1945, dan Bhinneka
                            Tunggal Ika sebagai benteng dari pergolakan massa di Indonesia. <br></p>
                        <p style="text-align: justify; text-indent:1.2cm">
                            Pondok Pesantren ini resmi didirikan pada tanggal 16 Agustus 1999 atas rintisan KH. M.
                            Sam’ani Khoiruddin, S.Ag. Letaknya yang berada di kawasan kampus ternama seperti Universitas
                            Diponegoro, Politeknik Negri Semarang, dan Politeknik Kesehatan Semarang
                            menjadikan Ponpes Kyai Galang Sewu menjadi pilihan tepat bagi mahasiswa yang ingin menuntut
                            ilmu sekaligus memperdalam ilmu agama. <br>
                        </p>
                        {{-- <div class="main-button">
                            <a href="#">Discover More</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="services section" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        {{-- <h6>Jurusan</h6> --}}
                        <h2>PROGRAM</h2>
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
                            <p style="text-align: justify; text-indent:1.2cm">Jurusan Tahfidz Qur'an merupakan program
                                jurusan hafalan 30 juz Al Qur’an yang bersanad
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
                            <p style="text-align: justify; text-indent:1.2cm">Jurusan Kitab merupakan program jurusan
                                yang difokuskan untuk mengkaji kitab kuning /
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
    <section class="section courses" id="ekstra">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        {{-- <h6>EKSTRA</h6> --}}
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
                        <div class="thumb" style="height: 230px" style="height: 230px">
                            <img src="img/rebana.JPG" alt="">
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
                        <div class="thumb" style="height: 230px">
                            <img src="img/kgs tv.JPG" alt="">
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
                        <div class="thumb" style="height: 230px">
                            <img src="img/kgs media.PNG" alt="">
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
                        <div class="thumb" style="height: 230px">
                            <img src="img/devnet.jpg" alt="">
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
                        <div class="thumb" style="height: 230px">
                            <img src="img/puskes.JPG" alt="">
                            <span class="category">Putra / Putri</span>

                        </div>
                        <div class="down-content">
                            <span class="author">Kesehatan</span>
                            <h4>Puskestren</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 putra">
                    <div class="events_item">
                        <div class="thumb" style="height: 230px">
                            <img src="img/silat.JPG" alt="">
                            <span class="category">Putra</span>

                        </div>
                        <div class="down-content">
                            <span class="author">Olahraga</span>
                            <h4>Silat</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 putra putri">
                    <div class="events_item">
                        <div class="thumb" style="height: 230px">
                            <img src="img/kaligrafi.jpg" alt=""></a>
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
                        <div class="thumb" style="height: 230px">
                            <img src="assets/images/sound.jpeg" alt="">
                            < <span class="category">Putra </span>

                        </div>
                        <div class="down-content">
                            <span class="author">Manajemen Suara</span>
                            <h4>KGS Sound</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 putra putri">
                    <div class="events_item">
                        <div class="thumb" style="height: 230px">
                            <img src="img/rne.jpg" alt=""></ <span class="category">Putra / Putri</span>
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

    <div class="section fun-facts" id="kuota">
        <div class="container">
            <div class="section-heading" style="margin-top: -100px">
                <h2>Kuota Pendaftaran</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number"
                                        data-to="{{ $setting['quota_kitab_pa'] + $setting['quota_tahfidh_pa'] }}"
                                        data-speed="1000"></h2>
                                    <p class="count-text ">Santri Putra</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number"
                                        data-to="{{ $setting['quota_kitab_pi'] + $setting['quota_tahfidh_pi'] }}"
                                        data-speed="1000"></h2>
                                    <p class="count-text ">Santri Putri</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="{{ $count['putra'] }}"
                                        data-speed="1000"></h2>
                                    <p class="count-text ">Putra Terisi</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter end">
                                    <h2 class="timer count-title count-number" data-to="{{ $count['putri'] }}"
                                        data-speed="1000"></h2>
                                    <p class="count-text ">Putri Terisi</p>
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
                            <img src="img/bapak2.jpg" alt="" style="box-shadow: 2px 2px 5px #0000001c">
                            <span class="category"> Pengasuh</span>
                            <h5>Bapak K. M. Nur Salafuddin, A.H.</h5>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="img/abah2.jpg" alt="" alt=""
                                style="box-shadow: 2px 2px 5px #0000001c">
                            <span class="category">Pendiri</span>
                            <h5>( Alm. )Abah K.H.R. M. Sam'ani Khoiruddin, S.Ag. </h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="img/pak ulin2.jpg" alt="" alt=""
                                style="box-shadow: 2px 2px 5px #0000001c">
                            <span class="category">Pengasuh</span>
                            <h5 class="category">Bapak Ust. Ulin Nuha ABA, M.Si.</h5>

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
                                <h4>Bapak K. Abdillah Matori, S.Pd.I</h4>
                            </div>
                        </div>
                        <div class="item">
                            <p>“Seberapa besar kita memuliakan Al-Quran, sebesar itupula Allah memuliakan kita”</p>
                            <div class="author">
                                <img src="assets/images/bapak.jpg" alt="">
                                <span class="category">Pengasuh</span>
                                <h4>Bapak K.M. Nur Salafudin A.H</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>Dawuh Guru</h6>
                        <h2>Apa Kata Beliau?</h2>
                        <p>Kamu ingin belajar di Pondok Pesantren ? Tapi masih mikir mikir dulu ? Tenang, biar kamu bisa
                            memantapkan hatimu, yuk simak apa yang para guru sampaikan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section events" style="padding-bottom:50px " id="flow">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        {{-- <h6>Timeline</h6> --}}
                        <h2>Alur Administrasi Penerimaan Santri</h2>
                    </div>
                    <img src="assets/images/flow.png" alt="" srcset="">
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="img/daftar.png" alt="">
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
                                        <h6>
                                            <?php
                                            setlocale(LC_ALL, 'ID');
                                            echo strftime('%d %B %Y', strtotime($setting['start_period']));
                                            ?> -
                                            <?php
                                            setlocale(LC_ALL, 'ID');
                                            echo strftime('%d %B %Y', strtotime($setting['end_period']));
                                            ?>
                                        </h6>
                                    </li>
                                    <li>
                                        <span><strong> Link Pendaftaran </strong></span>
                                        <h6>----></h6>
                                    </li>
                                </ul>
                                <a href="daftar"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="img/verif.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">online</span>
                                        <h4>Verifikasi Berkas (Admin)</h4>
                                    </li>
                                    <li>
                                        <span>Tanggal:</span>
                                        <h6>
                                            <?php
                                            setlocale(LC_ALL, 'ID');
                                            echo strftime('%d %B %Y', strtotime($setting['start_period']));
                                            ?> -
                                            <?php
                                            setlocale(LC_ALL, 'ID');
                                            echo strftime('%d %B %Y', strtotime($setting['end_period']));
                                            ?>
                                        </h6>
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
                                    <img src="img/pay.png" alt="">
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
                                        <span><strong> Metode Pembayaran </strong></span>
                                        <h6>----></h6>
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
                                    <img src="img/dokum.png" alt="">
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
                                    <li>
                                        <span><strong> Cek Lokasi </strong></span>
                                        <h6>----></h6>
                                    </li>
                                    <a target="_blank" href="https://goo.gl/maps/3jCsuCYQzofVRm3CA">
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
                                    <img src="img/welcome.png" alt="">
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
                                    <li>
                                        <span><strong> Cek Lokasi</strong></span>
                                        <h6>----></h6>
                                    </li>

                                    <a target="_blank" href="https://goo.gl/maps/3jCsuCYQzofVRm3CA">
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
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #F08A5D">Info Pembayaran
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-stripped">
                                <thead>
                                    <tr>
                                        <th class="category">
                                            Santri
                                        </th>
                                        <th class="category">Biaya </th>
                                        <th class="category">Cicilan </th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Santri Putra</td>

                                        <td>Rp 1.630.XXX</td>
                                        <td>Pembayaran maksimal dicicil 2 kali, pembayaran pertama saat mendaftar
                                            minimal
                                            Rp 500.000, kemudian saat datang ke pondok wajib melunasi sisanya</td>

                                    </tr>

                                    <tr>
                                        <td>Santri Putri</td>
                                        <td>Rp 2.350.XXX </td>
                                        <td>
                                            Pembayaran bisa dicicil hingga bulan Desember 2023
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Jumlah yang harus ditransferkan adalah biaya pendaftaran
                                            ditambah 3 digit terakhir nomor pendaftaran
                                            Contoh : biaya pendaftaran Rp 2.350.000, nomor pendaftaran anda P100020001
                                            Berarti jumlah yang harus ditransfer adalah Rp 2.350.001</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-4">Santri Putra ditransfer ke</div>
                            <div class="col-8">3680-01-024604-53-4 (BRI)
                                a/n M.Irvan Muhandis
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">Santri Putri ditransfer ke</div>
                            <div class="col-8">5918-01-017999-53-1 (BRI)
                                a/n Saniyatin </div>
                        </div>
                        <div class="mt-3"><strong class="text-danger">* Upload bukti pembayaran dan konfirmasi ke
                                nomor pengurus</strong></div>
                        <span class="mt-3">
                            Kontak : <a href="http://wa.me/6285280009949" target="_blank"
                                rel="noopener noreferrer">085280009949
                                (putra)</a> -
                            <a href="http://wa.me/6285280009930" target="_blank" rel="noopener noreferrer">085280009930
                                (putri)</a></a>
                        </span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" style="color:white;background-color: #F08A5D"
                            data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container to-registration" style="margin-bottom: 10px" id="daftar">
        <div class="col-xxl-12 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="{{ asset('img/banner3.JPG') }}" class="banner-img d-block mx-lg-auto img-fluid"
                        alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Segera Daftarkan Dirimu, Menjadi Bagian Dari Kami</h1>
                    <p class="lead"><b>Di jaman sekarang mau mondok itu adalah nikmat yang sangat besar. Maka, perlu
                            untuk disyukuri.</b> <br>
                        Bapak Ust. Muhammad Ulin Nuha ABA, M.Si.(Pengasuh Ponpes)</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start button-daftar">
                        <div class="buttons mt-2">
                            <div class="main-button">
                                @if (session('id') === null)
                                    <a href="/daftar">Daftar Sekarang</a>
                                @endif
                            </div>
                        </div>
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
@endsection
