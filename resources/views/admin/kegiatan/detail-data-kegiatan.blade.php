@extends('admin.dashboard')
@section('content')

    <body>
        <div class="container ">
            <div class="col-2-lg-10">
                <h6>Detail Kegiatan</h6>
                <div class="container mt-5 mb-2">
                    <div class="container ml-2">
                        <h1 class="text-dark">{{ $data->nama_kegiatan }}</h1>

                        <a href="#">
                            <button type="button" class="btn btn-info mb-1 float-right mr-6">
                                Riwayat Kegiatan
                            </button>
                        </a>

                        <div class="container">
                            <div class="row">
                                <div class="col-9 mt-5 mb-3">
                                    <img src="{{ asset('gambarkegiatanbaru/' . $data->gambar) }}"
                                        class="rounded float-left" width="250" height="250" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="container ml-4 mt-3">
                                    <h6>Tanggal</h6>
                                    <strong>
                                        <p>{{ $data->tanggal }}</p>
                                    </strong>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="container ml-4 mt-3">
                                    <h6>Status</h6>
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-users text-light"></i>
                                    </div>
                                    <strong>
                                        <p>{{ $data->status }}</p>
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container ml-4 mt-3 ">
                        <h3>Deskripsi</h3>
                        <p>{!! html_entity_decode($data->deskripsi_kegiatan) !!}</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
    </body>
@endsection
