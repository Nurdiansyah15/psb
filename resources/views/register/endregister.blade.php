@extends('template.global')
@section('content')
    <div class="text-center" style="margin-top:13%;margin-bottom:15%">
        @foreach ($data as $row => $r)
            @if ($r['id'] == $id)
                <h5 class="btn" style="background:#146C94;color:#fff;">Nomor Registrasi Anda : {{ $r['no_regis'] }}</h5>
            @endif
        @endforeach
        <p class="text-danger">*catatlah agar tidak lupa!</p>
    </div>
    <div class="" style="margin-bottom: 200px"></div>
@endsection
