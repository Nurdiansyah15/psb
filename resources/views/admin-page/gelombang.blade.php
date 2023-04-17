@extends("template.admin2")
@section("content")
<!-- Page Wrapper -->
<div class="container mt-3">
    <h2><b>Data Gelombang</b></h2>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahgel">+Tambah</button>
    <div class="modal fade" id="tambahgel" tabindex="-1" aria-labelledby="tambahgelLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahgelLabel">Tambah Gelombang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form>
                        <div class="mb-3">
                            <label for="namagel" class="col-form-label">Nama Gelombang</label>
                            <input type="text" class="form-control" id="namagel">
                        </div>
                        <div class="mb-3">
                            <label for="pembukaan" class="col-form-label">Pembukaan</label>
                            <input type="date" class="form-control" id="pembukaan">
                        </div>
                        <div class="mb-3">
                            <label for="penutupan" class="col-form-label">Penutupan</label>
                            <input type="date" class="form-control" id="penutupan">
                        </div>
                        <div class="mb-3">
                            <label for="tahfidhpa" class="col-form-label">Putra Tahfidh</label>
                            <input type="text" class="form-control" id="tahfidhpa">
                        </div>
                        <div class="mb-3">
                            <label for="kitabpa" class="col-form-label">Putra Kitab</label>
                            <input type="text" class="form-control" id="kitabpa">
                        </div>
                        <div class="mb-3">
                            <label for="tahfidhpi" class="col-form-label">Putri Tahfidh</label>
                            <input type="text" class="form-control" id="tahfidhpi">
                        </div>
                        <div class="mb-3">
                            <label for="kitabpi" class="col-form-label">Putri Kitab</label>
                            <input type="text" class="form-control" id="kitabpi">
                        </div>
                        <div class="mb-3">
                            <label for="pembayaranpa" class="col-form-label">Pembayaran Putra</label>
                            <input type="text" class="form-control" id="pembayaranpa">
                        </div>
                        <div class="mb-3">
                            <label for="rekpa" class="col-form-label">Rekening Putra</label>
                            <input type="text" class="form-control" id="rekpa">
                        </div>
                        <div class="mb-3">
                            <label for="pembayaranpa" class="col-form-label">Pembayaran Putri</label>
                            <input type="text" class="form-control" id="pembayaranpa">
                        </div>
                        <div class="mb-3">
                            <label for="rekpi" class="col-form-label">Rekening Putri</label>
                            <input type="text" class="form-control" id="rekpi">
                        </div>
                    </form>
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
                        setlocale(LC_ALL, 'ID');
                        echo strftime('%d %B %Y', strtotime($item['start_period']));
                        ?>
                    </td>

                    <td>
                        <?php
                        setlocale(LC_ALL, 'ID');
                        echo strftime('%d %B %Y', strtotime($item['end_period']));
                        ?>
                    </td>
                    <td>
                        <?php setlocale(LC_ALL, 'ID'); ?>
                        @if ($item['status'] == 1)
                        <span class="badge badge-sm bg-gradient-success">Aktif</span>
                        @else
                        <span class="badge badge-sm bg-gradient-secondary">Nonaktif</span>
                        @endif
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">Edit</button>
                        <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="editLabel">Atur Gelombang</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body ">
                                        <form>
                                            <div class="mb-3">
                                                <label for="namagel" class="col-form-label">Nama Gelombang</label>
                                                <input type="text" class="form-control" id="namagel">
                                            </div>
                                            <div class="mb-3">
                                                <label for="pembukaan" class="col-form-label">Pembukaan</label>
                                                <input type="date" class="form-control" id="pembukaan">
                                            </div>
                                            <div class="mb-3">
                                                <label for="penutupan" class="col-form-label">Penutupan</label>
                                                <input type="date" class="form-control" id="penutupan">
                                            </div>
                                            <div class="mb-3">
                                                <label for="tahfidhpa" class="col-form-label">Putra Tahfidh</label>
                                                <input type="text" class="form-control" id="tahfidhpa">
                                            </div>
                                            <div class="mb-3">
                                                <label for="kitabpa" class="col-form-label">Putra Kitab</label>
                                                <input type="text" class="form-control" id="kitabpa">
                                            </div>
                                            <div class="mb-3">
                                                <label for="tahfidhpi" class="col-form-label">Putri Tahfidh</label>
                                                <input type="text" class="form-control" id="tahfidhpi">
                                            </div>
                                            <div class="mb-3">
                                                <label for="kitabpi" class="col-form-label">Putri Kitab</label>
                                                <input type="text" class="form-control" id="kitabpi">
                                            </div>
                                            <div class="mb-3">
                                                <label for="pembayaranpa" class="col-form-label">Pembayaran
                                                    Putra</label>
                                                <input type="text" class="form-control" id="pembayaranpa">
                                            </div>
                                            <div class="mb-3">
                                                <label for="rekpa" class="col-form-label">Rekening Putra</label>
                                                <input type="text" class="form-control" id="rekpa">
                                            </div>
                                            <div class="mb-3">
                                                <label for="pembayaranpa" class="col-form-label">Pembayaran
                                                    Putri</label>
                                                <input type="text" class="form-control" id="pembayaranpa">
                                            </div>
                                            <div class="mb-3">
                                                <label for="rekpi" class="col-form-label">Rekening Putri</label>
                                                <input type="text" class="form-control" id="rekpi">
                                            </div>
                                        </form>
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
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection