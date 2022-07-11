@extends('admin.layout.main')
@section('content')

    <body>
        <div class="container ">
            <div class="col-12">
                <h6>Detail Kader</h6>

                <div class="container mt-4">
                    <div class="main-body">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            @if ($data->foto)
                                                <div class="overflow-hidden">
                                                    <img src="{{ asset('fotoprofile/' . $data->foto) }}"
                                                        class="rounded-circle" width="150" height="150" alt="Admin">
                                                </div>
                                            @else
                                                <img src="https://inspektorat.kotawaringinbaratkab.go.id/public/uploads/user/default-user-imge.jpeg"
                                                    class=" rounded-circle" width="100" height="100" alt="Admin">
                                            @endif
                                            <div class="mt-3">
                                                <h4>{{ $data->nama }}</h4>
                                                <p class="text-secondary mb-1">{{ $data->jurusan }}</p>
                                                <p class="text-muted font-size-sm">F{{ $data->fakultas }}
                                                    {{ $data->angkatan }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3 shadow">
                                    <ul class="list-group list-group-flush">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0">Email</h6>
                                            <span class="text-secondary">{{ $data->email }}</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0">Nomor Handphone</h6>
                                            <span class="text-secondary">0{{ $data->no_handphone }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card mb-3 shadow">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Tempat & Tanggal Lahir</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                {{ $data->tempat_lahir }}, {{ $data->tanggal_lahir }}
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Departemen</h6>
                                            </div>
                                            @if ($data->departemen == null)
                                            <div class="col-sm-9 text-secondary">
                                                <p>Data Kosong</p>
                                            </div>
                                            @else
                                            <div class="col-sm-9 text-secondary">
                                                {{ $data->departemen->nama_departemen }}
                                            </div>
                                            @endif
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Jenis Kelamin</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                {{ $data->jenis_kelamin }}
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Alamat Asal</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                {{ $data->alamat_asal }}
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Alamat Domisili (tinggal) </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                {{ $data->alamat_domisili }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gutters-sm">
                                    <div class="col-sm-12 mb-3">
                                        <div class="card h-100 shadow">
                                            <div class="card-body">
                                                <h6 class="d-flex align-items-center mb-3">Riwayat Kegiatan</h6>
                                                <table class="table">
                                                    @php
                                                        $array = $data->rekamkegiatan;
                                                        $obj = json_decode(json_encode($array));
                                                    @endphp
                                                    @if ($data->rekamkegiatan == null)
                                                        <p>Belum pernah mengkuti kegiatan</p>
                                                    @else
                                                        <tr>
                                                            <th>Nama Kegiatan</th>
                                                            <th>Status</th>
                                                        </tr>
                                                        @php
                                                            $array = $data->datakegiatan;
                                                            $object = json_decode(json_encode($array));
                                                        @endphp

                                                        @foreach ($object as $item)
                                                            <tr>
                                                                <td>
                                                                    {{ $item->nama_kegiatan }}
                                                                </td>
                                                                <td>
                                                                    {{ $item->status }}
                                                                </td>
                                                        @endforeach
                                                        </tr>
                                                    @endif
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
                                integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
                                crossorigin="anonymous"></script>
    </body>
@endsection
