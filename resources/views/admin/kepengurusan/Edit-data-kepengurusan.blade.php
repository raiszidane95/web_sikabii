@extends('admin.layout.main')
@section('content')

    <body>
        <div class="container ">
            <div class="card-lg-10">
                <div class="container mt-5 mb-2">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5><strong>Edit Data Kepengurusan</strong></h5>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="card">
                                    <div class="card-body card-block">
                                        <form action="/admin/kepengurusan/update/{{ $data->id_kepengurusan }}"
                                            method="POST" enctype="multipart/form-data" class="form-horizontal">
                                            @csrf

                                            {{-- Nama Kepengurusan --}}
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input"
                                                        class=" form-control-label">Nama
                                                        Kepengurusan</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="nama"
                                                        name="nama_kepengurusan" placeholder="Nama"
                                                        value="{{ $data->nama_kepengurusan }}" class="form-control">
                                                </div>
                                            </div>

                                            {{-- Tahun Kepengurusan --}}
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="email-input"
                                                        class=" form-control-label">Tahun
                                                        Kepengurusan</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="tahun_kepengurusan"
                                                        name="tahun_kepengurusan" placeholder="Tahun"
                                                        value="{{ $data->tahun_kepengurusan }}" class="form-control">
                                                </div>
                                            </div>

                                            {{-- visi --}}
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="textarea-input"
                                                        class=" form-control-label">Visi</label></div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="visi" id="visi" rows="4" aria-valuetext="" placeholder="Visi"
                                                        class="form-control">{{ $data->visi }}</textarea>
                                                </div>
                                            </div>

                                            {{-- misi --}}
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="textarea-input"
                                                        class=" form-control-label">Misi</label></div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="misi" id="misi" rows="10" placeholder="Misi" class="form-control"> {{ $data->misi }}</textarea>
                                                </div>
                                            </div>

                                            {{-- file input gambar --}}
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="file-input"
                                                        class=" form-control-label">Logo
                                                        Kepengurusan</label></div>
                                                <div class="col-12 col-md-9">
                                                    @if ($data->logo)
                                                        <img src="{{ asset('logokabinet/' . $data->logo) }}"
                                                            class="rounded float-left" width="50" height="50" alt="">
                                                    @else
                                                        <img class="rounded float-left" width="50" height="50" alt="">
                                                    @endif
                                                    <input type="file" id="file-input" name="logo"
                                                        class="form-control-file">
                                                    {{-- <input type="hidden" name="oldlogo" value="{{ asset('logokabinet/' . $data->logo) }}" class="form-control-file"> --}}
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="/admin/kepengurusan"><button type="button" class="btn btn-secondary rounded"
                                                    data-dismiss="modal">Kembali</button></a>
                                                <button type="submit" class="btn btn-primary rounded">Simpan</button>
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
            CKEDITOR.replace('misi');
        </script>
    @endpush
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    </div>
@endsection
