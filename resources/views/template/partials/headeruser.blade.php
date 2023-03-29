<header class="header-area header-sticky background-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <p id="psb">PSB</p>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">

                        <li class="scroll-to-section"><a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
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
  <!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-body">
            <h4 class="text-center mb-5">Login</h4>
            <form class="mx-1 mx-md-4" action="{{route('login')}}" method="POST">
                @csrf
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-file fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <input value="{{old('no_regis')}}" required name="no_regis" type="text" class=" form-control" id="floatingInput"
                            placeholder="Nomor Pendaftaran">
                            @error('no_regis')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <input value="{{old('password')}}" required name="password" type="password" class=" form-control" id="floatingInput"
                            placeholder="Password">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit"
                        class="btn" style="background:#146C94;color:#fff;">Login</button>
                </div>
            </form>
            <div>Belum punya akun? Daftar <a href="{{url('daftar')}}">Disini</a> </div>
            <div>Lupa Password? Klik <a href="{{url('forgot')}}">Disini</a> </div>
        </div>

      </div>
    </div>
  </div>
