@extends('admin.dashboard')
@section('content')

    <body>
        <div class="container ">
            <div class="card-lg-10">
                <div class="container mt-5 mb-2">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5><strong>Edit Data Kegiatan</strong></h5>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="card">
                                    <div class="card-body card-block">
                                        <form action="/admin/kegiatan/update/{{ $data->id_kegiatan }}" method="POST"
                                            enctype="multipart/form-data" class="form-horizontal">
                                            @csrf

                                            {{-- Nama Kegiatan --}}
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input"
                                                        class=" form-control-label">Nama
                                                        Kegiatan</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="nama"
                                                        name="nama_kegiatan" placeholder="Nama"
                                                        value="{{ $data->nama_kegiatan }}" class="form-control">
                                                </div>
                                            </div>

                                            {{-- Tanggal Kegiatan --}}
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="email-input"
                                                        class=" form-control-label">Tanggal Kegiatan</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="datepicker"
                                                        name="tanggal" placeholder="Tanggal" value="{{ $data->tanggal }}"
                                                        class=" datepicker form-control">
                                                </div>
                                            </div>

                                            {{-- deskripsi_kegiatan --}}
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="textarea-input"
                                                        class=" form-control-label">Deskripsi</label></div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="deskripsi_kegiatan" id="deskripsi_kegiatan" rows="4" aria-valuetext=""
                                                        placeholder="Deskripsi kegiatan" class="form-control">{{ $data->deskripsi_kegiatan }}</textarea>
                                                </div>
                                            </div>

                                            {{-- misi --}}
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="select"
                                                        class=" form-control-label">Select</label></div>
                                                <div class="col-12 col-md-9">
                                                    <select name="status" id="status" class="form-control">
                                                        <option value="Open">Open</option>
                                                        <option value="Closed">Closed</option>
                                                        <option value="Selesai">Selesai</option>
                                                    </select>
                                                </div>
                                            </div>

                                            {{-- file input gambar --}}
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="file-input"
                                                        class=" form-control-label">Gambar
                                                        Kegiatan</label></div>
                                                <div class="col-12 col-md-9">
                                                    @if ($data->gambar)
                                                        <img src="{{ asset('gambarkegiatanbaru/' . $data->gambar) }}"
                                                            class="rounded float-left" width="50" height="50"
                                                            alt="">
                                                    @else
                                                        <img class="rounded float-left" width="50" height="50"
                                                            alt="">
                                                    @endif
                                                    <input type="file" name="gambar" class="form-control-file">
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
    </body>
    @push('ckeditor')
        <script>
            CKEDITOR.replace('deskripsi_kegiatan');
        </script>
    @endpush
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    </div>
@endsection
