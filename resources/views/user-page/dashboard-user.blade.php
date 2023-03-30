@extends('template.global')
@section('content')
    <section class="content">
        <div class="container">
            @if (session()->has('success'))
                <div class="col-10 mx-auto alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session()->has('failed'))
                <div class="col-10 mx-auto alert alert-danger" role="alert">
                    {{ session('failed') }}
                </div>
            @endif
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 left-section">
                    <div class="row short-profile">
                        <div class="col-3 photo-profile">
                            <a href="#" onclick="return func(0)" id="edit-button" class= "edit-button"><i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <img src="storage/uploads/photo/{{ isset($data['path_photo']) ? $data['path_photo'] : 'user-icon.png' }}"
                                class="img-fluid" alt="pp">
                        </div>
                        <div class="col-9 name-register">
                            <div class="row">
                                <div class="col-12 name">
                                    {{ $data['fullname'] }}
                                </div>
                                <div class="col-12 number">
                                    {{ $data['no_regis'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row menu">
                        <div class="col-12 menu-link btn" id="data-diri">
                            <p>Data Diri</p>
                        </div>
                        <div class="col-12 menu-link btn" id="dokumen">
                            <p>Dokumen</p>
                        </div>
                        <div class="col-12 menu-link btn" id="pembayaran">
                            <p>Pembayaran</p>
                        </div>
                        <div class="col-12 menu-link btn" id="cetak">
                            <p>Cetak Formulir</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 rigt-section">
                    {{-- content data diri --}}
                    <form action="/user/{{ $data['id'] }}" method="POST">
                        @csrf
                        <div class="row content-menu" id="data-diri-2">
                            <div class="col-12 title d-flex justify-content-between">
                                Data Diri
                                <div>
                                    <p style="display: none" class="btn btn-dark" id="kembali">Kembali</p>
                                </div>
                            </div>
                            {{-- profile menu --}}
                            <div class="col-12 profile-menu" id="profile-menu">
                                <div class="row">
                                    <div class="col-12 menu-link btn" id="pribadi">
                                        <p>Data Pribadi</p>
                                    </div>
                                    <div class="col-12 menu-link btn" id="kontak">
                                        <p>Kontak</p>
                                    </div>
                                    <div class="col-12 menu-link btn" id="kependudukan">
                                        <p>Kependudukan</p>
                                    </div>
                                    <div class="col-12 menu-link btn" id="pendidikan">
                                        <p>Pendidikan</p>
                                    </div>
                                    <div class="col-12 menu-link btn" id="orang-tua">
                                        <p>Data Orang Tua / Wali</p>
                                    </div>
                                </div>
                            </div>
                            {{-- end profile menu --}}
                            {{-- Data Pribadi --}}
                            <div class="col-12 self-profile" id="pribadi-2">
                                <div class="self-title">
                                    Data Pribadi
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nama Lengkap
                                    </div>
                                    <div class="content-item">
                                        <input name="fullname" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['fullname'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nama Panggilan
                                    </div>
                                    <div class="content-item">
                                        <input name="nickname" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['nickname'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Program
                                    </div>
                                    <div class="content-item">
                                        {{ $data['program'] }}
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Jenis Kelamin
                                    </div>
                                    <div class="content-item">
                                        @if ($data['option'] === '1')
                                            {{ 'Laki - Laki' }}
                                        @else
                                            {{ 'Perempuan' }}
                                        @endif
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Hobi
                                    </div>
                                    <div class="content-item">
                                        <input name="hobby" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['hobby'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Cita - Cita
                                    </div>
                                    <div class="content-item">
                                        <input name="purpose" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['purpose'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Tempat Lahir
                                    </div>
                                    <div class="content-item">
                                        <input name="pob" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['pob'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Tanggal Lahir
                                    </div>
                                    <div class="content-item">
                                        <input name="dob" type="date" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['dob'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Golongan Darah
                                    </div>
                                    <div class="content-item">
                                        <input name="blood" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['blood'] }}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                            {{-- end data pribadi --}}
                            {{-- Kontak --}}
                            <div class="col-12 self-profile" id="kontak-2">
                                <div class="self-title">
                                    Kontak
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Email
                                    </div>
                                    <div class="content-item">
                                        <input name="email" type="email" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['email'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor Whatsapp
                                    </div>
                                    <div class="content-item">
                                        <input name="phone" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['phone'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Kondisi Rumah
                                    </div>
                                    <div class="content-item">
                                        <input name="home_status" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['home_status'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Alamat Rumah
                                    </div>
                                    <div class="content-item">
                                        <input name="address" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['address'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Kecamatan
                                    </div>
                                    <div class="content-item">
                                        <input name="sub_district" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['sub_district'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Kabupaten / Kota
                                    </div>
                                    <div class="content-item">
                                        <input name="district" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['district'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Provinsi
                                    </div>
                                    <div class="content-item">
                                        <input name="province" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['province'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Kode Pos
                                    </div>
                                    <div class="content-item">
                                        <input name="postal_code" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['postal_code'] }}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                            {{-- end kontak --}}
                            {{-- Kependudukan --}}
                            <div class="col-12 self-profile" id="kependudukan-2">
                                <div class="self-title">
                                    Kependudukan
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor Induk Kependudukan ( NIK, 16 digit )
                                    </div>
                                    <div class="content-item">
                                        <input max="20" name="nik" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['nik'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor Kartu Keluarga ( KK, 16 digit )
                                    </div>
                                    <div class="content-item">
                                        <input max="20" name="no_kk" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['no_kk'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor Induk Siswa Nasional ( NISN, 10 digit )
                                    </div>
                                    <div class="content-item">
                                        <input max="10" name="nisn" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['nisn'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor Kartu Indonesia Pintar ( KIP, 6 digit )
                                    </div>
                                    <div class="content-item">
                                        <input max="10" name="no_kip" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['no_kip'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor Kartu Keluarga Sejahtera ( KKS, 6 digit )
                                    </div>
                                    <div class="content-item">
                                        <input max="20" name="no_kks" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['no_kks'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor Program Keluarga Harapan ( PKH, 6 digit )
                                    </div>
                                    <div class="content-item">
                                        <input max="10" name="no_pkh" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['no_pkh'] }}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                            {{-- end kependudukan --}}
                            {{-- Pendidikan --}}
                            <div class="col-12 self-profile" id="pendidikan-2">
                                <div class="self-title">
                                    Pendidikan
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Universitas/Sekolah
                                    </div>
                                    <div class="content-item">
                                        <input name="workplace" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['workplace'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Jurusan
                                    </div>
                                    <div class="content-item">
                                        <input name="department" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['department'] }}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                            {{-- end pendidikan --}}
                            {{-- Orang Tua --}}
                            <div class="col-12 self-profile" id="orang-tua-2">
                                <div class="self-title">
                                    Data Orang Tua / Wali
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nama Ayah
                                    </div>
                                    <div class="content-item">
                                        <input name="father" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['father'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor Whatsapp / HP Ayah
                                    </div>
                                    <div class="content-item">
                                        <input name="father_pn" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['father_pn'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor NIK Ayah
                                    </div>
                                    <div class="content-item">
                                        <input name="father_nik" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['father_nik'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Pekerjaan Ayah
                                    </div>
                                    <div class="content-item">
                                        <input name="father_job" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['father_job'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Pendidikan Ayah
                                    </div>
                                    <div class="content-item">
                                        <input name="father_graduate" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['father_graduate'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Pendapatan Ayah
                                    </div>
                                    <div class="content-item">
                                        <input name="father_income" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['father_income'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nama Ibu
                                    </div>
                                    <div class="content-item">
                                        <input name="mother" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['mother'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor Whatsapp / HP Ibu
                                    </div>
                                    <div class="content-item">
                                        <input name="mother_pn" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['mother_pn'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor NIK Ibu
                                    </div>
                                    <div class="content-item">
                                        <input name="mother_nik" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['mother_nik'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Pekerjaan Ibu
                                    </div>
                                    <div class="content-item">
                                        <input name="mother_job" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['mother_job'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Pendidikan Ibu
                                    </div>
                                    <div class="content-item">
                                        <input name="mother_graduate" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['mother_graduate'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Pendapatan Ibu
                                    </div>
                                    <div class="content-item">
                                        <input name="mother_income" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['mother_income'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nama Wali
                                    </div>
                                    <div class="content-item">
                                        <input name="guardian" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['guardian'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor Whatsapp / HP Wali
                                    </div>
                                    <div class="content-item">
                                        <input name="guardian_pn" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['guardian_pn'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Nomor NIK Wali
                                    </div>
                                    <div class="content-item">
                                        <input name="guardian_nik" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['guardian_nik'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Pekerjaan Wali
                                    </div>
                                    <div class="content-item">
                                        <input name="guardian_job" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['guardian_job'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Pendidikan Wali
                                    </div>
                                    <div class="content-item">
                                        <input name="guardian_graduate" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['guardian_graduate'] }}">
                                    </div>
                                </div>
                                <div class="item-profile">
                                    <div class="title-item">
                                        Pendapatan Wali
                                    </div>
                                    <div class="content-item">
                                        <input name="guardian_income" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $data['guardian_income'] }}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                            {{-- end Orang Tua --}}
                        </div>
                    </form>
                    {{-- end content data diri --}}
                    {{-- content dokumen --}}
                    <div class="row content-menu" id="dokumen-2">
                        <div class="col-12 title">
                            Dokumen
                        </div>
                        <div class="col-12 self-profile">
                            <div class="self-title">
                                Masukan Dokumen
                            </div>
                            <form action="/doc/{{ $data['id'] }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="item-profile">
                                    <div class="title-item">
                                        Scan Surat Pernyataan, KTP, dan KK ( Dalam 1 dokumen PDF )
                                    </div>
                                    <div class="content-item">
                                        <input required name="path_doc" class="form-control" type="file"
                                            id="formFile">
                                    </div>
                                    <button type="submit" class="my-3 btn btn-success">Simpan</button>
                                </div>
                            </form>
                            @if ($data['path_doc'] !== null)
                                <iframe id="iframepdf" style="width: 100%; height:100vh"
                                    src="storage/uploads/doc/{{ $data['path_doc'] }}"></iframe>
                            @endif

                        </div>
                    </div>
                    {{-- end content dokumen --}}
                    {{-- content pembayaran --}}
                    <div class="row content-menu" id="pembayaran-2">
                        <div class="col-12 title">
                            Pembayaran
                        </div>
                        <div class="col-12 self-profile">
                            <div class="self-title">
                                Masukan Bukti Pembayaran
                            </div>
                            <form action="/bill/{{ $data['id'] }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="item-profile">
                                    <div class="title-item">
                                        Bukti Pembayaran
                                    </div>
                                    <div class="content-item">
                                        <input required name="path_bill" class="form-control" type="file"
                                            id="formFile">
                                    </div>
                                    <button type="submit" class="my-3 btn btn-success">Simpan</button>
                                </div>
                            </form>
                            @if ($data['path_bill'] !== null)
                                <iframe id="iframepdf" style="width: 100%; height:100vh"
                                    src="storage/uploads/doc/{{ $data['path_bill'] }}"></iframe>
                            @endif
                        </div>
                    </div>
                    {{-- end content pembayaran --}}
                    {{-- content cetak formulir --}}
                    <div class="row content-menu" id="cetak-2">
                        <div class="col-12 title">
                            Cetak Formulir
                        </div>
                        <div class="col-12 self-profile">
                            <div class="self-title">
                                Silakan Cetak Formulir
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Formulir Pendaftaran
                                </div>
                                <div class="content-item">
                                    @if ($data['status'] == 1)
                                        <a target="_blank" href="/print/{{ Crypt::encryptString($data['id']) }}"
                                            class="btn btn-primary"> Cetak</a>
                                    @else
                                        {{ 'Masih dalam proses verifikasi' }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end content cetak formulir --}}
                    {{-- content edit pp --}}
                    <div class="row content-menu" style="display: none" id="edit-photo">
                        <div class="col-12 title d-flex justify-content-between">
                            Edit Poto Profil
                            <div>
                                <p class="btn btn-dark" id="kembali-edit-foto">Kembali</p>
                            </div>
                        </div>
                        <div class="col-12 self-profile">
                            <div class="self-title">
                                Edit Foto
                            </div>
                            <div class="item-profile">
                                <div class="title-item">
                                    Upload Foto
                                </div>
                                <form action="/photo/{{ $data['id'] }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="content-item">
                                        <input name="path_photo" class="form-control" type="file" id="formFile"
                                            required>
                                    </div>
                                    <button type="submit" class="my-3 btn btn-success">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- end content edit pp --}}
                </div>
            </div>
        </div>

    </section>
@endsection
