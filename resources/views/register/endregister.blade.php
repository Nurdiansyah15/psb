@extends('template.global')
@section('content')

    <div class="d-flex text-center" style="margin-top:150px">
        <div class="container-fluid">
            <section class="vh-100">
                <div class=" container h-100 mt-5">
                    <h5 class="btn" style="background:#146C94;color:#fff;">Nomor Registrasi Anda : {{ $data['no_regis'] }}</h5>
                    <p class="text-danger">*catatlah agar tidak lupa!</p>
                </div>
            </section>
        </div>
    </div>
@endsection
