@extends("template.user")
@section("content")
<div class="text-center ">
<?php

    $id=$data['id'];
    $nama=$data['name'];
    $awal=$data['start_period'];
    $akhir=$data['end_period'];
    $tahfidhpa=$data['quota_tahfidh_pa'];
    $tahfidhpi=$data['quota_tahfidh_pi'];
    $kitabpa=$data['quota_kitab_pa'];
    $kitabpi=$data['quota_kitab_pi'];
    $pa=intval($tahfidhpa)+intval($kitabpa);
    $pi=intval($tahfidhpi)+intval($kitabpi);

    $today=date('Y-m-d');
    // $today='2023-03-29';

?>


@if ($today<$awal)
<div style="margin-top:10%;margin-bottom:15%">
    <h3>Perhatian !</h3>
    <p>Maaf, pendaftaran Gelombang ini belum dibuka</p>
    <p>Info lebih lanjut, hubungi <a href="http://wa.me/6285280009949" target="_blank" rel="noopener noreferrer">085280009949 (putra)</a> -
        <a href="http://wa.me/6285280009930" target="_blank" rel="noopener noreferrer">085280009930 (putri)</a></p>
</div>
@endif
@if ($today>$akhir)
<div style="margin-top:10%;margin-bottom:15%">
    <h3>Perhatian !</h3>
    <p>Maaf, pendaftaran Gelombang ini sudah ditutup, nantikan gelombang berikutnya</p>
    <p>Info lebih lanjut, hubungi <a href="http://wa.me/6285280009949" target="_blank" rel="noopener noreferrer">085280009949 (putra)</a> -
        <a href="http://wa.me/6285280009930" target="_blank" rel="noopener noreferrer">085280009930 (putri)</a></p>
</div>
@endif
{{-- <h3>Perhatian !!!</h3>
<p>Maaf, Kuota yang anda pilih sudah penuh!!!!</p>
<p>Nantikan gelombang selanjutnya!!!!</p> --}}

@if ($today>=$awal && $today<=$akhir)
<h3>Pendaftaran Santri Tahun {{$nama}}</h3>
    <div class="d-flex">
        <div class="container-fluid">
            <section class="vh-100 mt-5 mb-5">
                <div class=" container h-100 mt-5 mb-5">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-12 col-xl-11">
                            <div class="card text-black">
                                <div class="card-header" style="background:#f08a5d;color:#fff;">
                                    Step 2
                                </div>
                                <div class="card-body p-md-5">
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 col-lg-12 col-xl-5 order-2 order-lg-1">
                                            <p class="text-center h5 fw-bold mb-5 mx-1 mx-md-4 mt-3">Daftar</p>
                                            <form class="mx-1 mx-md-6" action="daftar" method="POST">
                                                @csrf
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-file fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <input required name="nik" type="text" class=" form-control" id="floatingInput"
                                                            placeholder="NIK">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <input required name="fullname" type="text" class=" form-control" id="floatingInput"
                                                            placeholder="Nama Lengkap">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <input required name="email" type="email" class=" form-control" id="floatingInput"
                                                            placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <input required name="phone"type="text" class="form-control" id="floatingInput"
                                                            placeholder="Nomor Whatsapp">
                                                            <input required type="hidden" name="option" value="{{$option}}">
                                                            <input required type="hidden" name="program" value="{{$program}}">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <input required name="password" type="password" class=" form-control" id="floatingInput"
                                                            placeholder="Password">
                                                    </div>
                                                </div>

                                                <div class="form-check d-flex justify-content-center mb-5">
                                                    <input class="form-check-input me-2" type="checkbox" value=""
                                                        id="form2Example3c" />
                                                    <label class="form-check-label" for="form2Example3">
                                                        Saya menyutujui segala persyaratan<a href="#!"></a>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                    <button type="button"
                                                        class="btn btn-primary btn-lg">Submit</button>
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
