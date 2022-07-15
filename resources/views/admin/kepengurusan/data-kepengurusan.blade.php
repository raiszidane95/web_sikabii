@extends('admin.layout.main')
@section('content')

    <body>
        <div class="container ">
            <div class="col-lg-10">
                <h3>Data Kepengurusan</h3>
                <div class="container mt-5 mb-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary rounded mb-2" data-toggle="modal" data-target="#largeModal">
                        Tambah Data
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5><strong>Tambah Data Kepengurusan</strong></h5>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="card">
                                            <div class="card-body card-block">
                                                <form action="/admin/kepengurusan/store" method="POST"
                                                    enctype="multipart/form-data" class="form-horizontal">
                                                    @csrf

                                                    {{-- Nama Kepengurusan --}}
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="text-input"
                                                                class=" form-control-label">Nama Kepengurusan</label></div>
                                                        <div class="col-12 col-md-9"><input type="text" id="nama"
                                                                name="nama_kepengurusan" placeholder="Nama"
                                                                class="form-control">
                                                        </div>
                                                    </div>

                                                    {{-- Tahun Kepengurusan --}}
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="email-input"
                                                                class=" form-control-label">Tahun Kepengurusan</label></div>
                                                        <div class="col-12 col-md-9"><input type="text"
                                                                id="tahun_kepengurusan" name="tahun_kepengurusan"
                                                                placeholder="Tahun" class="form-control">
                                                        </div>
                                                    </div>

                                                    {{-- visi --}}
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="textarea-input"
                                                                class=" form-control-label">Visi</label></div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea name="visi" id="visi" rows="4" placeholder="Visi" class="form-control"></textarea>
                                                        </div>
                                                    </div>

                                                    {{-- misi --}}
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="textarea-input"
                                                                class=" form-control-label">Misi</label></div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea name="misi" id="misi" rows="10" placeholder="Misi" class="form-control"></textarea>
                                                        </div>
                                                    </div>

                                                    {{-- file input gambar --}}
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="file-input"
                                                                class=" form-control-label">Logo Kepengurusan</label></div>
                                                        <div class="col-12 col-md-9"><input type="file" id="file-input"
                                                                name="logo" class="form-control-file"></div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary rounded"
                                                            data-dismiss="modal">Batal</button>
                                                        <button type="submit"
                                                            class="btn btn-primary rounded">Simpan</button>
                                                    </div>
                                                </form>
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
                            <strong class="card-title">Data Kepengurusan Kaderisasi Birohmah</strong>

                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table"
                                class="table table-sm table-striped table-bordered dataTable no-footer" role="grid"
                                aria-describedby="bootstrap-data-table_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending" style="width: 25px;">No</th>
                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 210px;">Nama</th>
                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table"
                                            rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending" style="width: 121px;">Tahun Kepengurusan
                                        </th>
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
                                        <td>{{ $id++ }}</td>
                                        <td>{{ $post->nama_kepengurusan }}</td>
                                        <td>{{ $post->tahun_kepengurusan }}</td>
                                        <td class="w-25">
                                            <a href="/admin/kepengurusan/{{ $post->id_kepengurusan }}">
                                                <button type="button"
                                                    class="btn btn-info btn-sm mb-1 rounded">View</button>
                                            </a>
                                            <a href="/admin/kepengurusan/edit/{{ $post->id_kepengurusan }}">
                                                <button type="button"
                                                    class="btn btn-warning btn-sm mb-1 rounded">Edit</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                {{-- @endforeach --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </body>
    <script>
        $('.delete').click(function() {
            var id_kepengurusan = $(this).attr('data-id');
            var nama_kepengurusan = $(this).attr('data-nama');
            swal({
                    title: "Apakah anda yakin?",
                    text: "Menghapus data " + nama_kepengurusan +
                        " akan menghapus departemen yang ada di kepengurusan tersebut!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/admin/kepengurusan/delete/" + id_kepengurusan + ""
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

    @push('ckeditor')
        <script>
            CKEDITOR.replace('misi');
        </script>
    @endpush
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
@endsection
