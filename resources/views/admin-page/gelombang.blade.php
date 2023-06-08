@extends("template.admin3")
@section("content")
<!-- Page Wrapper -->
<div class="container mt-3">
    <h2><b>Data Gelombang</b></h2>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahgel">+Tambah</button>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
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
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{ $item['id'] }}">
                            <i class="fa fa-trash"></i>
                        </button>
                        <div data-bs-backdrop="static" class="modal fade" id="delete{{$item['id'] }}" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="deleteLabel">Hapus Data
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah anda yakin ingin menghapus data ini?</p>
                                    </div>
                                    <div class=" modal-footer">
                                        <form action="{{route('gelombang.destroy', $item['id']) }}" method="POST">@csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm d-inline-flex">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit{{$item['id']}}">
                            <i class="fa fa-edit"></i></button>
                        <form method="POST" action="{{route('gelombang.update', $item['id']) }}">
                            @csrf
                            <div class="modal fade" id="edit{{$item['id']}}" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="editLabel">Atur Gelombang</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body ">
                                            <div class="mb-3">
                                                <label for="namagel" class="col-form-label">Nama Gelombang</label>
                                                <input type="text" class="form-control" id="namagel" name="name" value="<?php echo ($item['name']) ?>">
                                            </div>
                                            <div class=" mb-3">
                                                <label for="pembukaan" class="col-form-label">Pembukaan</label>
                                                <input type="date" class="form-control" id="pembukaan" name="start_period" value="<?php echo ($item['start_period']) ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="penutupan" class="col-form-label">Penutupan</label>
                                                <input type="date" class="form-control" id="penutupan" name="end_period" value="<?php echo ($item['end_period']) ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="tahfidhpa" class="col-form-label">Putra Tahfidh</label>
                                                <input type="text" class="form-control" id="tahfidhpa" name="quota_tahfidh_pa" value="<?php echo ($item['quota_tahfidh_pa']) ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="kitabpa" class="col-form-label">Putra Kitab</label>
                                                <input type="text" class="form-control" id="kitabpa" name="quota_kitab_pa" value="<?php echo ($item['quota_kitab_pa']) ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="tahfidhpi" class="col-form-label">Putri Tahfidh</label>
                                                <input type="text" class="form-control" id="tahfidhpi" name="quota_tahfidh_pi" value="<?php echo ($item['quota_tahfidh_pi']) ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="kitabpi" class="col-form-label">Putri Kitab</label>
                                                <input type="text" class="form-control" id="kitabpi" name="quota_kitab_pi" value="<?php echo ($item['quota_kitab_pi']) ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="pembayaranpa" class="col-form-label">Pembayaran Putra</label>
                                                <input type="text" class="form-control" id="pembayaranpa" name="cost_pa" value="<?php echo ($item['cost_pa']) ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="rekpa" class="col-form-label">Rekening Putra</label>
                                                <input type="text" class="form-control" id="rekpa" name="rekening_pa" value="<?php echo ($item['rekening_pa']) ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="pembayaranpa" class="col-form-label">Pembayaran Putri</label>
                                                <input type="text" class="form-control" id="pembayaranpa" name="cost_pi" value="<?php echo ($item['cost_pi']) ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="rekpi" class="col-form-label">Rekening Putri</label>
                                                <input type="text" class="form-control" id="rekpi" name="rekening_pi" value="<?php echo ($item['rekening_pi']) ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="status" class="col-form-label">Status Gelombang</label>
                                                <select required class="form-select" id="status" name="status">
                                                    <option value="<?php echo ($item['status']) ?>">
                                                        @if ($item['status'] == '1')
                                                        {{ 'Aktif' }}
                                                        @else
                                                        {{ 'Non Aktif' }}
                                                        @endif
                                                    </option>
                                                    <option value="1">Aktif</option>
                                                    <option value="0">Non Aktif</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button class=" btn btn-primary" name="submit" type="submit">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
    </div>
</div>
</div>

</td>

</tr>
@endforeach
</tbody>
</table>

@endsection