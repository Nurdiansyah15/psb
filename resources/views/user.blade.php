@extends("template.admin")
@section("content")
<!-- Custom styles for this template -->
<link href="sidebars.css" rel="stylesheet">
</head>

<body>
    <h2>Data Calon Santri Baru</h2>
    <div class="row team_inner">
        <div class="col-lg-12">
            <div class="table table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Fahrul</td>
                            <td>1234567</td>
                            <td>Santri</td>
                            <td>
                                <a href="/user/1/edit" class="btn btn-primary">Edit</a>
                                <a href="/user/1/delete" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection