@extends('template.global')
@section('content')
    <div class="text-center ">
        <?php
        
        $id = $data['id'];
        $nama = $data['name'];
        
        ?>


        @if ($next == 'n')
            <div style="margin-top:10%;margin-bottom:15%">
                <i class="fa-solid fa-face-sad-cry fa-5x mb-2"></i>
                <h3>Maaf, Kuota sudah penuh !</h3>

            </div>
        @endif



        @if ($next == 'y')
            <div class="d-flex">
                <div class="container-fluid">
                    <section class="vh-100 ">
                        <div class=" container h-50 mt-5">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-lg-12 col-xl-11">
                                    <h3 style="margin-top:40px">Pendaftaran Santri Tahun {{ $nama }}</h3>
                                    <div class="card text-black">
                                        <div class="card-header" style="background:#146C94;color:#fff;">
                                            Step 2
                                        </div>
                                        <div class="card-body ">
                                            <div class="row justify-content-center">
                                                <div class="col-md-10 col-lg-12 col-xl-5 order-2 order-lg-1">
                                                    <p class="text-center h5 fw-bold mx-1 mx-md-4">Daftar</p>
                                                    <form class="mx-1 mx-md-6" action="{{ route('daftar.store') }}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="d-flex flex-row align-items-center mb-2">
                                                            <i class="fas fa-file fa-lg me-3 fa-fw"></i>
                                                            <div class="form-outline flex-fill mb-0">
                                                                <input value="{{ old('nik') }}" required name="nik"
                                                                    type="text" class=" form-control" id="floatingInput"
                                                                    placeholder="NIK">
                                                                @error('nik')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row align-items-center mb-2">
                                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                            <div class="form-outline flex-fill mb-0">
                                                                <input value="{{ old('fullname') }}" required
                                                                    name="fullname" type="text" class=" form-control"
                                                                    id="floatingInput" placeholder="Nama Lengkap">
                                                                @error('fullname')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row align-items-center mb-2">
                                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                            <div class="form-outline flex-fill mb-0">
                                                                <input value="{{ old('email') }}" required name="email"
                                                                    type="email" class=" form-control" id="floatingInput"
                                                                    placeholder="Email">
                                                                @error('email')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row align-items-center mb-2">
                                                            <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                                                            <div class="form-outline flex-fill mb-0">
                                                                <input value="{{ old('phone') }}" required
                                                                    name="phone"type="text" class="form-control"
                                                                    id="floatingInput" placeholder="Nomor Whatsapp">
                                                                @error('phone')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                <input required type="hidden" name="option"
                                                                    value="{{ $option }}">
                                                                <input required type="hidden" name="program"
                                                                    value="{{ $program }}">
                                                                <input required type="hidden" name="setting_id"
                                                                    value="{{ $id }}">
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row align-items-center mb-2">
                                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                            <div class="form-outline flex-fill mb-0">
                                                                <input value="{{ old('password') }}" required
                                                                    name="password" type="password" class=" form-control"
                                                                    id="floatingInput" placeholder="Password">
                                                                @error('password')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-check d-flex justify-content-center ">
                                                            <input required class="form-check-input me-2" type="checkbox"
                                                                value="" id="form2Example3c" />
                                                            <label class="form-check-label" for="form2Example3c">
                                                                Saya menyutujui segala persyaratan<a href="#!"></a>
                                                            </label>
                                                        </div>
                                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                            <button type="submit" class="btn"
                                                                style="background:#146C94;color:#fff;">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        @endif
    </div>
@endsection
