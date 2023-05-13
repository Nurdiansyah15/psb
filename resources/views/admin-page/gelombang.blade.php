@extends("template.admin3")
@section("content")
<!-- Page Wrapper -->
<div class="container mt-3">
    <h2><b>Data Gelombang</b></h2>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahgel">+Tambah</button>
    <form method="post" action="{{asset('admin/gelombang')}}">
        @csrf
        <div class="modal fade" id="tambahgel" tabindex="-1" aria-labelledby="tambahgelLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="tambahgelLabel">Tambah Gelombang</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body ">
                        <div class="mb-3">
                            <label for="namagel" class="col-form-label">Nama Gelombang</label>
                            <input type="text" class="form-control" id="namagel" name="name">
                        </div>
                        <div class=" mb-3">
                            <label for="pembukaan" class="col-form-label">Pembukaan</label>
                            <input type="date" class="form-control" id="pembukaan" name="start_period">
                        </div>
                        <div class="mb-3">
                            <label for="penutupan" class="col-form-label">Penutupan</label>
                            <input type="date" class="form-control" id="penutupan" name="end_period">
                        </div>
                        <div class="mb-3">
                            <label for="tahfidhpa" class="col-form-label">Putra Tahfidh</label>
                            <input type="number" class="form-control" id="tahfidhpa" name="quota_tahfidh_pa">
                        </div>
                        <div class="mb-3">
                            <label for="kitabpa" class="col-form-label">Putra Kitab</label>
                            <input type="number" class="form-control" id="kitabpa" name="quota_kitab_pa">
                        </div>
                        <div class="mb-3">
                            <label for="tahfidhpi" class="col-form-label">Putri Tahfidh</label>
                            <input type="number" class="form-control" id="tahfidhpi" name="quota_tahfidh_pi">
                        </div>
                        <div class="mb-3">
                            <label for="kitabpi" class="col-form-label">Putri Kitab</label>
                            <input type="number" class="form-control" id="kitabpi" name="quota_kitab_pi">
                        </div>
                        <div class="mb-3">
                            <label for="pembayaranpa" class="col-form-label">Pembayaran Putra</label>
                            <input type="number" class="form-control" id="pembayaranpa" name="cost_pa">
                        </div>
                        <div class="mb-3">
                            <label for="rekpa" class="col-form-label">Rekening Putra</label>
                            <input type="text" class="form-control" id="rekpa" name="rekening_pa">
                        </div>
                        <div class="mb-3">
                            <label for="pembayaranpa" class="col-form-label">Pembayaran Putri</label>
                            <input type="number" class="form-control" id="pembayaranpa" name="cost_pi">
                        </div>
                        <div class="mb-3">
                            <label for="rekpi" class="col-form-label">Rekening Putri</label>
                            <input type="text" class="form-control" id="rekpi" name="rekening_pi">
                            <input type="hidden" class="form-control" id="status" name="status" value="0">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary" name="submit" type="submit">
                            Submit
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </form>
    <div class="table-responsive">
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Gelombang</th>
                    <th>Pembukaan</th>
                    <th>Penutupan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>
                        <?php
                        setlocale(LC_ALL, 'ID');
                        echo ($item['name']);
                        ?>
                    </td>
                    <td>
                        <?php
                        echo strftime('%d %B %Y', strtotime($item['start_period']));
                        ?>
                    </td>

                    <td>
                        <?php
                        echo strftime('%d %B %Y', strtotime($item['end_period']));
                        ?>
                    </td>
                    <td>
                        @if ($item['status'] == 1)
                        <span class="badge badge-sm bg-gradient-success">Aktif</span>
                        @else
                        <span class="badge badge-sm bg-gradient-secondary">Nonaktif</span>
                        @endif
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit"><i class="fa fa-edit"></i></button>
                        <form method="post" action="{{asset('admin/gelombang')}}">
                            @csrf
                            <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="editLabel">Atur Gelombang</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body ">
                                            <div class="mb-3">
                                                <label for="namagel" class="col-form-label">Nama Gelombang</label>
                                                <input type="text" class="form-control" id="namagel" name="name">
                                            </div>
                                            <div class=" mb-3">
                                                <label for="pembukaan" class="col-form-label">Pembukaan</label>
                                                <input type="date" class="form-control" id="pembukaan" name="start_period">
                                            </div>
                                            <div class="mb-3">
                                                <label for="penutupan" class="col-form-label">Penutupan</label>
                                                <input type="date" class="form-control" id="penutupan" name="end_period">
                                            </div>
                                            <div class="mb-3">
                                                <label for="tahfidhpa" class="col-form-label">Putra Tahfidh</label>
                                                <input type="text" class="form-control" id="tahfidhpa" name="quota_tahfidh_pa">
                                            </div>
                                            <div class="mb-3">
                                                <label for="kitabpa" class="col-form-label">Putra Kitab</label>
                                                <input type="text" class="form-control" id="kitabpa" name="quota_kitab_pa">
                                            </div>
                                            <div class="mb-3">
                                                <label for="tahfidhpi" class="col-form-label">Putri Tahfidh</label>
                                                <input type="text" class="form-control" id="tahfidhpi" name="quota_tahfidh_pi">
                                            </div>
                                            <div class="mb-3">
                                                <label for="kitabpi" class="col-form-label">Putri Kitab</label>
                                                <input type="text" class="form-control" id="kitabpi" name="quota_kitab_pi">
                                            </div>
                                            <div class="mb-3">
                                                <label for="pembayaranpa" class="col-form-label">Pembayaran Putra</label>
                                                <input type="text" class="form-control" id="pembayaranpa" name="cost_pa">
                                            </div>
                                            <div class="mb-3">
                                                <label for="rekpa" class="col-form-label">Rekening Putra</label>
                                                <input type="text" class="form-control" id="rekpa" name="rekening_pa">
                                            </div>
                                            <div class="mb-3">
                                                <label for="pembayaranpa" class="col-form-label">Pembayaran Putri</label>
                                                <input type="text" class="form-control" id="pembayaranpa" name="cost_pi">
                                            </div>
                                            <div class="mb-3">
                                                <label for="rekpi" class="col-form-label">Rekening Putri</label>
                                                <input type="text" class="form-control" id="rekpi" name="rekening_pi">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                                <button class="btn btn-primary " name="submit" type="submit">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection