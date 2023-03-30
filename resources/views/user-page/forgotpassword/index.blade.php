@extends('template.global')
@section('content')
    <div class="text-center" style="margin-top:0%;margin-bottom:15%">
        <div class="d-flex">
            <div class="container-fluid">
                <section class="vh-100 ">
                    <div class=" container h-0 mt-5">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-lg-5 col-md-5 col-xl-5">
                                <div class="card text-black">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-12 col-lg-12 col-xl-12 p-4">
                                                <p class="text-center fw-bold mb-3">Masukkan Email Anda !</p>
                                                <form action="forgot" method="POST">
                                                    @method('POST')
                                                    @csrf
                                                    <!-- jenis Kelamin -->
                                                    <div class="d-flex flex-row align-items-center mb-4">

                                                        <input type="email" required class="form-control" name="email"
                                                            placeholder="email">

                                                    </div>

                                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                        <button type="submit" class="btn"
                                                            style="background:#146C94;color:#fff;">Reset</button>
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
    </div>
@endsection
