@extends('admin.layout.main')
@section('content')

    <body>
        <div class="container ">
            <div class="col-lg-10">
                <h3>Data Departemen</h3>

                <div class="container mt-5 mb-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary rounded mb-1" data-toggle="modal" data-target="#largeModal">
                        Tambah Data
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5><strong>Tambah Data Departemen</strong></h5>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="card">
                                            <div class="card-body card-block ">
                                                <form action="/admin/departemen/store" method="POST"
                                                    enctype="multipart/form-data" class="form-horizontal">
                                                    @csrf

                                                    {{-- Nama Departemen --}}
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="text-input"
                                                                class=" form-control-label">Nama Departemen</label></div>
                                                        <div class="col-12 col-md-9"><input type="text" id="nama"
                                                                name="nama_departemen" placeholder="Nama"
                                                                class="form-control">
                                                        </div>
                                                    </div>

                                                    {{-- kepala Departemen --}}
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="text-input"
                                                                class=" form-control-label">Kepala Departemen</label></div>
                                                        <div class="col-12 col-md-9"><input type="text" id="nama"
                                                                name="kepala_departemen" placeholder="Nama"
                                                                class="form-control">
                                                        </div>
                                                    </div>

                                                    {{-- Sekertaris Departemen --}}
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="text-input"
                                                                class=" form-control-label">Sekertaris Departemen</label>
                                                        </div>
                                                        <div class="col-12 col-md-9"><input type="text" id="nama"
                                                                name="sekertaris_departemen" placeholder="Nama"
                                                                class="form-control">
                                                        </div>
                                                    </div>

                                                    {{-- Kepengurusan --}}
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="select"
                                                                class=" form-control-label">Kepengurusan</label></div>
                                                        <div class="col-12 col-md-9">
                                                            <select name="id_kepengurusan" id="status"
                                                                class="form-control">
                                                                @foreach ($datakepengurusan as $item)
                                                                    <option value="{{ $item->id_kepengurusan }}">
                                                                        {{ $item->tahun_kepengurusan }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary rounded"
                                                            data-dismiss="modal">Cancel</button>
                                                        <button type="submit"
                                                            class="btn btn-primary rounded">Confirm</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Table --}}
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Departemen Kaderisasi Birohmah</strong>
                    </div>
                    <div class="card-body">

                        <table id="bootstrap-data-table"
                            class="table table-sm table-striped table-bordered dataTable no-footer" role="grid"
                            aria-describedby="bootstrap-data-table_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table"
                                        rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending" style="width: 121px;">Nama
                                        Departemen</th>
                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1"
                                        colspan="1" aria-label="Position: activate to sort column ascending"
                                        style="width: 210px;">Tahun Kepengurusan</th>
                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table"
                                        rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending" style="width: 84px;">Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datadepartemen as $item)
                                    <tr role="row" class="odd">
                                        <td>{{ $item->nama_departemen }}</td>
                                        <td><a href="/admin/kepengurusan/{{ $item->kepengurusan->id_kepengurusan }}"
                                                class="text-primary">{{ $item->kepengurusan->tahun_kepengurusan }}</a>
                                        </td>
                                        <td>
                                            <a href="/admin/departemen/edit/{{ $item->id_departemen }}"><button
                                                    class="btn btn-info btn-sm rounded"><i
                                                        class="bi bi-pencil-square"></i>Edit</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
    </body>

    <script>
        $('.delete').click(function() {
            var id_departemen = $(this).attr('data-id');
            var nama_departemen = $(this).attr('data-nama');
            swal({
                    title: "Apakah anda yakin?",

                    : "Menghapus data " + nama_departemen + " tidak dapat dikembalikan selelahnya!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/admin/departemen/delete/" + id_departemen + ""
                        swal("Data berhasil dihapus!", {
                            icon: "success",
                        });
                    } else {
                        swal("Data batal dihapus!");
                    }
                });
        });
    </script>

    @if (Session::has('success'))
        <script>
            toastr.success("{{ Session::get('success') }}")
        </script>
    @endif
@endsection
