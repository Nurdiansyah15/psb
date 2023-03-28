@extends("template.user")
@section("content")
<div class="text-center ">
<?php

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
            <section class="vh-100 ">
                <div class=" container h-50 mt-5">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-12 col-xl-11">
                            <div class="card text-black">
                                <div class="card-header" style="background:#146C94;color:#fff;">
                                    Step 1
                                </div>
                                <div class="card-body p-md-5">
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                            <p class="text-center h5 fw-bold mb-5 mx-1 mx-md-4 ">Cek ketersediaan kuota !!!</p>
                                            <form class="mx-1 mx-md-4" action="daftar/step2" method="POST">
                                                @csrf
                                                <!-- jenis Kelamin -->
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-male fa-lg me-3 fa-fw"></i>
                                                    <select required class="form-select" id="inputGroupSelect01" name="option">
                                                        <option value="">Jenis Kelamin</option>
                                                        <option value="1">Laki-Laki</option>
                                                        <option value="2">Perempuan</option>
                                                    </select>
                                                </div>
                                                <!-- Program -->
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-book fa-lg me-3 fa-fw"></i>
                                                    <select required class="form-select" id="inputGroupSelect02" name="program">
                                                        <option value="">Program</option>
                                                        <option value="Kitab">Kitab</option>
                                                        <option value="Tahfidh">Tahfidh</option>
                                                    </select>
                                                </div>
                                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-lg">Cek</button>
                                                </div>
                                            </form>
                                        </div>
                                        {{-- <div
                                            class="col-md-6 col-lg-4 col-xl-5 d-flex align-items-center order-1 order-lg-2">
                                            <img src="assets/images/logo-kgs.png" class="img-fluid" alt="Sample image">
                                        </div> --}}
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
