@extends('template.admin')
@section('content')
<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column bg-transparent">
        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
                    <b class="h3 mb-0 text-gray-800">Dashboard</b>
                </div>
                <!-- Content Row -->
                <div class="row">
                    <!-- Jumlah Santri -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Santri Yang Mendaftar</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $data['tahfidh_pa'] + $data['kitab_pa'] + $data['tahfidh_pi'] + $data['kitab_pi'] }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Santri Tahfidh -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Santri Tahfidz Putra</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $data['tahfidh_pa'] }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Santri Tahfidz Putri</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $data['tahfidh_pi'] }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Santri Kitab -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Santri Kitab Putra</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $data['kitab_pa'] }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Santri Kitab Putri</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $data['kitab_pi'] }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->
                <div class="row">
                    <!-- Content Column -->
                    <div class="col-lg-12 mb-4">
                        <!-- Status Pendaftaran -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Status Pendaftaran</h6>
                            </div>
                            <div class="card-body">
                                <h4 class="small font-weight-bold">Belum Lengkap <span class="float-right">30%</span>
                                </h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">Sudah Lengkap <span class="float-right">70%</span>
                                </h4>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
@endsection