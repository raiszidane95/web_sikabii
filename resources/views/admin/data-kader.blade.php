@extends('admin.layout.main')
@section('content')

    <body>
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
                                                class="table table-sm table-striped table-bordered dataTable no-footer"
                                                role="grid" aria-describedby="bootstrap-data-table_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="bootstrap-data-table" rowspan="1"
                                                            colspan="1" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending"
                                                            style="width: 121px;">Name</th>
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
                                                            style="width: 32px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $item)
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
                                                            <td><a href="/admin/data-kader/{{ $item->id_anggota }}"><button class="btn btn-warning btn-sm rounded" ><i
                                                                class="fa fa-eye"></i></button></a>
                                                            </td>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
    </body>
@endsection
