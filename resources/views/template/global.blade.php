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

    <link rel="stylesheet" href="{{ asset('assets/css/template.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing-style.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                            @if (session('id'))
                                <li class="dropdown">
                                    <a class="btn dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ session('no_regis') }}
                                    </a>

                                    <ul class="dropdown-menu text-center p-0" style="background-color:#146C94">
                                        <li class="p-0"><a class="dropdown-item " href="/user">Profil</a>

                                        </li>

                                        <li class="p-0"><a class="dropdown-item " href="/logout">Logout</a></li>
                                    </ul>

                                </li>
                            @else
                                <li class="scroll-to-section"><a href="#" data-bs-toggle="modal"
                                        data-bs-target="#loginModal">Login</a></li>
                            @endif
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

    @yield('content')

    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Dibuat dengan &hearts; oleh KGS Devnet. &nbsp;&nbsp;&nbsp; Kontak : <a
                        href="http://wa.me/6285280009949" target="_blank" rel="noopener noreferrer">085280009949
                        (putra)</a> -
                    <a href="http://wa.me/6285280009930" target="_blank" rel="noopener noreferrer">085280009930
                        (putri)</a></a>
                </p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @if (session()->has('failed'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Gagal Login!',
                showConfirmButton: false,
                timer: 6000
            })
        </script>
    @endif
    @if (session()->has('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Berhasil Login!',
                showConfirmButton: false,
                timer: 6000
            })
        </script>
    @endif
    @if (session()->has('logout'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Berhasil Logout!',
                showConfirmButton: false,
                timer: 6000
            })
        </script>
    @endif

    <!-- Modal Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">
                    <h4 class="text-center mb-5">Login</h4>
                    <form class="mx-1 mx-md-4" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-file fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input value="{{ old('no_regis') }}" required name="no_regis" type="text"
                                    class=" form-control" id="floatingInput" placeholder="Nomor Pendaftaran">
                                @error('no_regis')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input value="{{ old('password') }}" required name="password" type="password"
                                    class=" form-control" id="floatingInput" placeholder="Password">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <button type="submit" class="btn"
                                style="background:#146C94;color:#fff;">Login</button>
                        </div>
                    </form>
                    <div>Belum punya akun? Daftar <a href="{{ url('daftar') }}">Disini</a> </div>
                    <div>Lupa Password? Klik <a href="{{ url('forgot') }}">Disini</a> </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/counter.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
