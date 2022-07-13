@extends('admin.layout.main')
@section('content')

    <body>
        <div class="container ">
            <div class="col-lg-10">
                <h3>Data Kegiatan</h3>
                <div class="container mt-5 mb-2">
                    @if (Session::has('success'))
                        <script>
                            toastr.success("{{ Session::get('success') }}")
                        </script>
                    @endif
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
                                    <h5><strong>Tambah Data Kegiatan</strong></h5>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="card">
                                            <div class="card-body card-block ">
                                                <form action="/admin/kegiatan/store" method="POST"
                                                    enctype="multipart/form-data" class="form-horizontal">
                                                    @csrf

                                                    {{-- Nama Kegiatan --}}
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="text-input"
                                                                class=" form-control-label">Nama Kegiatan</label></div>
                                                        <div class="col-12 col-md-9"><input type="text"
                                                                id="nama_kegiatan" name="nama_kegiatan" placeholder="Nama"
                                                                class="form-control">
                                                        </div>
                                                    </div>


                                                    {{-- Tanggal Kegiatan --}}
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="email-input"
                                                                class=" form-control-label">Tanggal Kegiatan</label></div>
                                                        <div class="col-12 col-md-9"><input type="text" id="datepicker"
                                                                name="tanggal" placeholder="Tanggal"
                                                                class="datepicker form-control">
                                                        </div>
                                                    </div>

                                                    {{-- deskripsi --}}
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="textarea-input"
                                                                class=" form-control-label">Deskripsi</label></div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea name="deskripsi_kegiatan" id="deskripsi" rows="10" class="form-control"></textarea>
                                                        </div>
                                                    </div>

                                                    {{-- status --}}
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="select"
                                                                class=" form-control-label">Select</label></div>
                                                        <div class="col-12 col-md-9">
                                                            <select name="status" id="status" class="form-control">
                                                                <option value="Open">Open</option>
                                                                <option value="Closed">Closed</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    {{-- file input gambar --}}
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="file-input"
                                                                class=" form-control-label">Gambar Kegiatan</label></div>
                                                        <div class="col-12 col-md-9"><input type="file" id="file-input"
                                                                name="gambar" class="form-control-file"></div>
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
                        <strong class="card-title">Data Kegiatan Kaderisasi Birohmah</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table"
                            class="table table-sm table-striped table-bordered dataTable no-footer" role="grid"
                            aria-describedby="bootstrap-data-table_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table"
                                        rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending" style="width: 121px;">No</th>
                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table"
                                        rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending" style="width: 210px;">
                                        Nama</th>
                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table"
                                        rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending" style="width: 84px;">Action
                                    </th>
                                </tr>
                            </thead>
                            @php
                                $id = 1;
                            @endphp
                            @foreach ($data as $post)
                                <tr>
                                    <td><a href="/admin/kegiatan/{{ $post->id_kegiatan }}">{{ $id++ }}</a>
                                    </td>
                                    <td><a
                                            href="/admin/kegiatan/{{ $post->id_kegiatan }}">{{ $post->nama_kegiatan }}</a>
                                    </td>
                                    <td>
                                        <a href="/admin/kegiatan/edit/{{ $post->id_kegiatan }}">
                                            <button class="btn btn-warning btn-sm rounded" onClick="show()">Edit</button>
                                        </a>
                                        <a class="delete" data-nama="{{ $post->nama_kegiatan }}"
                                            data-id="{{ $post->id_kegiatan }}">
                                            <button class="btn btn-danger btn-sm rounded">Delete</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $('.delete').click(function() {
                var id_kegiatan = $(this).attr('data-id');
                var nama_kegiatan = $(this).attr('data-nama');
                swal({
                        title: "Apakah anda yakin?",
                        text: "Menghapus data " + nama_kegiatan +
                            " akan menghapus Kegiatan yang ada?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            window.location = "/admin/kegiatan/delete/" + id_kegiatan + ""
                            swal("Data berhasil dihapus!", {
                                icon: "success",
                            });
                        } else {
                            swal("Data batal dihapus!");
                        }
                    });
            });
        </script>
        @push('ckeditor')
            <script>
                CKEDITOR.replace('deskripsi');
            </script>
        @endpush
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
    </body>
@endsection
