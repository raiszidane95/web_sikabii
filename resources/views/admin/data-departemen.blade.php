@extends('admin.dashboard')
@section('content')

    <body>
        <div class="container ">
            <div class="col-lg-10">
                <h3>Data Departemen</h3>

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

                                                    {{-- Kepengurusan --}}
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="select"
                                                                class=" form-control-label">Kepengurusan</label></div>
                                                        <div class="col-12 col-md-9">
                                                            <select name="id_kepengurusan" id="status"
                                                                class="form-control">
                                                                @foreach ($datakepengurusan as $item)
                                                                    <option value="{{ $item->id_kepengurusan }}">
                                                                        {{ $item->nama_kepengurusan }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
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
                </div>

                {{-- Table --}}
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Departemen Kaderisasi Birohmah</strong>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Nama Departemen</th>
                                <th>Tahun Kepengurusan</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($datadepartemen as $post)
                                <tr>
                                    <td>{{ $post->nama_departemen }}</td>
                                    <td><a href="/admin/kepengurusan/{{ $post->kepengurusan->id_kepengurusan }}" class="text-primary">{{ $post->kepengurusan->tahun_kepengurusan }}</a></td>
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
