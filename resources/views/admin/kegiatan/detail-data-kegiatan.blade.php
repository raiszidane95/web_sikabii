@extends('admin.layout.main')
@section('content')
    {{-- @php
    header('Content-type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename=Data Riwayat Kegiatan.xls');
    header('Cache-Control: no-cache, must-revalidate');
    header('Pragma: no-cache');
    @endphp --}}

    <body>
        <div class="container ">
            <div class="col-2-lg-10">
                <h6>Detail Kegiatan</h6>
                <div class="container mt-5 mb-2">
                    <div class="container ml-2">
                        <h1 class="text-dark">{{ $data->nama_kegiatan }}</h1>

                        <div class="container">
                            <div class="row">
                                <div class="col-9 mt-5 mb-3">
                                    <img src="{{ asset('gambarkegiatanbaru/' . $data->gambar) }}" class="rounded float-left"
                                        width="250" height="250" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="container ml-4 mt-3">
                                    <h6>Tanggal</h6>
                                    <strong>
                                        <h5>{{ $data->tanggal }}</h5>
                                    </strong>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="container ml-4 mt-3">
                                    <h6>Status</h6>
                                    <strong>
                                        <h5>{{ $data->status }}</h5>
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container ml-4 mt-5 ">
                        <div class="card h-100 shadow">
                            <div class="card-body">
                                <h3>Deskripsi</h3>
                                <p>{!! html_entity_decode($data->deskripsi_kegiatan) !!}</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mt-3 mb-1">
                                <a href="/admin/kegiatan/riwayat-kegiatan/{{ $data->id_kegiatan }}"
                                    class="btn btn-success mb-1 rounded"> Export Riwayat Kegiatan</a>
                            </div>
                        </div>
                        <div class="container mt-3">
                            <div class="col-2-lg-10">
                                <div class="card h-100 shadow">
                                    <div class="card-body">
                                        <h6 class="d-flex align-items-center mb-3">Riwayat Kegiatan
                                            {{ $data->nama_kegiatan }}
                                        </h6>
                                        <table class="table">
                                            <tr>
                                                <th>No</th>
                                                <th>Peserta</th>
                                                <th>Waktu Daftar</th>
                                                <th>Departemen</th>
                                                <th>Kepengurusan</th>
                                            </tr>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($get as $item)
                                                <tr>
                                                    <td>
                                                        {{ $i++ }}
                                                    </td>
                                                    <td>
                                                        {{ $item->anggota[0]->nama }}
                                                    </td>
                                                    <td>
                                                        {{ $item->waktu_rekamkegiatan }}
                                                    </td>
                                                    <td>
                                                        {{ $item->anggota[0]->departemen->nama_departemen }}
                                                    </td>
                                                    <td>
                                                        {{ $item->anggota[0]->departemen->kepengurusan->nama_kepengurusan }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
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
