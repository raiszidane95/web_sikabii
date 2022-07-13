@extends('admin.layout.main')
@section('content')

    <body>
        <div class="container ">
            <div class="card-lg-10">
                <div class="container mt-5 mb-2">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5><strong>Edit Data Departemen</strong></h5>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="card">
                                    <div class="card-body card-block">
                                        <form action="/admin/departemen/update/{{ $data->id_departemen }}" method="POST"
                                            enctype="multipart/form-data" class="form-horizontal">
                                            @csrf

                                            {{-- Nama Departemen --}}
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input"
                                                        class=" form-control-label">Nama Departemen</label></div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nama"
                                                        value="{{ $data->nama_departemen }}" name="nama_departemen"
                                                        placeholder="Nama" class="form-control">
                                                </div>
                                            </div>

                                            {{-- Kepengurusan --}}
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="select"
                                                        class=" form-control-label">Kepengurusan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="id_kepengurusan" id="status" class="form-control">
                                                        <option value="{{ $data->kepengurusan->id_kepengurusan }}">
                                                            Selected {{ $data->kepengurusan->tahun_kepengurusan }}
                                                        </option>
                                                        @foreach ($datakepengurusan as $item)
                                                            <option value="{{ $item->id_kepengurusan }}">
                                                                {{ $item->tahun_kepengurusan }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            {{-- Kepala & Sekertaris Departemen --}}
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input"
                                                        class=" form-control-label">Kepala Departemen</label></div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nama"
                                                        value="{{ $data->kepala_departemen }}" name="kepala_departemen"
                                                        placeholder="Nama" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input"
                                                        class=" form-control-label">Sekertaris Departemen</label></div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nama"
                                                        value="{{ $data->sekertaris_departemen }}"
                                                        name="sekertaris_departemen" placeholder="Nama"
                                                        class="form-control">
                                                </div>
                                            </div>

                                    </div>

                                    <div class="modal-footer">
                                        <a href="/admin/departemen">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancel</button></a>
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
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    </div>
@endsection
