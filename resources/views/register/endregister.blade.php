@extends("template.user")
@section("content")
<div class="text-center" style="margin-top:10%;margin-bottom:10%">

            <h5 class="btn" style="background:#146C94;color:#fff;">Nomor Registrasi Anda : {{$data['no_regis']}}</h5>

    <p class="text-danger">*catatlah agar tidak lupa!</p>
</div>
<div class="" style="margin-bottom: 200px"></div>
@endsection
