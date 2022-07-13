

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

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
        <div class="row">
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


            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Data Kader</strong>
                                </div>
                                <div class="card-body">
                                    <div id="bootstrap-data-table_wrapper"
                                        class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="bootstrap-data-table"
                                                    class="table table-striped table-bordered dataTable no-footer"
                                                    role="grid" aria-describedby="bootstrap-data-table_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0"
                                                                aria-controls="bootstrap-data-table" rowspan="1"
                                                                colspan="1" aria-sort="ascending"
                                                                aria-label="Name: activate to sort column descending"
                                                                style="width: 121px;">Nama</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="bootstrap-data-table" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Position: activate to sort column ascending"
                                                                style="width: 210px;">Departemen</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="bootstrap-data-table" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Office: activate to sort column ascending"
                                                                style="width: 84px;">Kepengurusan</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="bootstrap-data-table" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Salary: activate to sort column ascending"
                                                                style="width: 64px;">Fakultas</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($datakader as $item)
                                                            <tr role="row" class="odd">
                                                                <td>{{ $item->nama }}</td>
                                                                @if ($item->departemen == null)
                                                                    <td>Data Kosong</td>
                                                                    <td>Data Kosong</td>
                                                                @else
                                                                    <td>{{ $item->departemen->nama_departemen }}</td>
                                                                    <td>{{ $item->departemen->kepengurusan->tahun_kepengurusan }}
                                                                    </td>
                                                                @endif
                                                                <td>{{ $item->fakultas }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .animated -->
            </div>

            {{-- content --}}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
@endsection
