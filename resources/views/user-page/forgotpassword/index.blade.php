@extends('template.global')
@section('content')
    <div class="text-center">
        <div class="d-flex">
            <div class="container-fluid">
                <section class="vh-100 ">
                    <div class=" container h-50 vh-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-lg-5 col-md-5 col-xl-5">
                                <div class="card text-black">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-12 col-lg-12 col-xl-12 p-4">
                                                <p class="text-center fw-bold mb-3">Masukkan Email Anda !</p>
                                                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                                <form action="forgot" method="POST">
                                                    @method('POST')
                                                    @csrf
                                                    @error('email')
                                                        {{-- <div class="alert alert-danger"></div> --}}
                                                        <script>
                                                            Swal.fire({
                                                                position: 'center',
                                                                icon: 'error',
                                                                title: '{{ $message }}',
                                                                showConfirmButton: false,
                                                                timer: 1500
                                                            })
                                                        </script>
                                                    @enderror
                                                    @if(session('success'))
                                                        {{-- <div class="alert alert-danger"></div> --}}
                                                        <script>
                                                            Swal.fire({
                                                                position: 'center',
                                                                icon: 'success',
                                                                title: '{{ session('success') }}',
                                                                showConfirmButton: false,
                                                                timer: 1500
                                                            })
                                                        </script>
                                                    @endif
                                                    <div class="d-flex flex-row align-items-center mb-4">

                                                        <input value="{{ old('email') }}" type="email"
                                                            class="form-control  @error('email') is-invalid @enderror"
                                                            id="email" name="email">

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
