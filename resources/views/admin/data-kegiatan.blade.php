@extends('admin.dashboard')
@section('content')

    <body>
        <div class="container ">
            <div class="col-lg-10">
                <h3>Data Kegiatan</h3>
                <div class="container mt-5 mb-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Tambah Data
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Understood</button>
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
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Kegiatan</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($data as $post)
                                <tr>
                                    <td><a href="/kegiatan/{{ $post['nama_kegiatan'] }}">{{ $post->id_kegiatan }}</a></td>
                                    <td><a href="/kegiatan/{{ $post['nama_kegiatan'] }}">{{ $post->nama_kegiatan }}</a></td>
                                    <td>
                                        <button class="btn btn-warning" onClick="show()">Edit</button>
                                        <button class="btn btn-danger" onClick="destroy()">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
    </body>
@endsection
