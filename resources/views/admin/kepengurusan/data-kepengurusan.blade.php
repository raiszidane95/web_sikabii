@extends('admin.dashboard')
@section('content')

    <body>
        <div class="container ">
            <div class="col-lg-10">
                <h3>Data Kepengurusan</h3>
                <div class="container mt-5 mb-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#largeModal">
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
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary">Confirm</button>
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
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kepengurusan</th>
                                    <th>Tahun</th>
                                    <th>Action</th>
                                </tr>

                                @php
                                    $id = 1;
                                @endphp
                                @foreach ($data as $post)
                                    <tr>
                                        <td><a
                                                href="/admin/kepengurusan/{{ $post->id_kepengurusan }}">{{ $id++ }}</a>
                                        </td>
                                        <td><a href="/admin/kepengurusan/{{ $post->id_kepengurusan }}">{{ $post->nama_kepengurusan }}
                                            </a>
                                        </td>
                                        <td>
                                                <a
                                                    href="/admin/kepengurusan/{{ $post->id_kepengurusan }}">{{ $post->tahun_kepengurusan }}</a>
                                        </td>
                                        <td>
                                            <a href="/admin/kepengurusan/edit/{{ $post->id_kepengurusan }}">
                                                <button type="button" class="btn btn-warning mb-1" data-toggle="modal"
                                                    data-target="#EditModal">
                                                    Edit
                                                </button>
                                            </a>
                                            <a class="delete"
                                                data-nama="{{ $post->nama_kepengurusan }}"
                                                data-id="{{ $post->id_kepengurusan }}">
                                                <button type="button" class="btn btn-danger mb-1" data-toggle="modal"
                                                    data-target="#EditModal">
                                                    Delete
                                                </button>
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
                    text: "Menghapus data " + nama_kepengurusan + " akan menghapus departemen yang ada di kepengurusan tersebut!",
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
