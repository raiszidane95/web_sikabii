@extends('admin.layout.main')
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard Admin</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-1">
                <a href="/admin/data-kader">
                    <div class="card-body pb-0">
                        <h1 class="mb-0">
                            <span class="text-light count">{{ $data }}</span>
                        </h1>
                        <strong>
                            <p class="text-light">Jumlah Kader</p>
                        </strong>
                    </div>
                </a>
            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-4">
                <a href="/admin/kegiatan">
                    <div class="card-body pb-0">
                        <h1 class="mb-0">
                            <span class="text-light count">{{ $datakegiatan }}</span>
                        </h1>
                        <strong>
                            <p class="text-light">Jumlah Kegiatan</p>
                        </strong>
                    </div>
                </a>
            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-3">
                <a href="/admin/departemen">
                    <div class="card-body pb-0">
                        <h1 class="mb-0">
                            <span class="text-light count">{{ $datadepartemen }}</span>
                        </h1>
                        <strong>
                            <p class="text-light">Departemen</p>
                        </strong>
                    </div>
                </a>
            </div>
        </div>
        <!--/.col-->
    </div> <!-- .content -->
@endsection
