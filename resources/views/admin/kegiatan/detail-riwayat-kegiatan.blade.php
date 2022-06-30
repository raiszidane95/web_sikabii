@extends('admin.layout.main')
@section('content')

    <body>
        <div class="container ">
            <div class="col-2-lg-10">
                <h6>Detail Kegiatan</h6>
                <div class="container ml-4 mt-5">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h6 class="d-flex align-items-center mb-3">Riwayat Kegiatan</h6>
                            <table class="table">
                                {{-- @if ($data->rekamkegiatan == null)
                                    <p>Belum Dilaksanakan</p>
                                @else --}}
                                <tr>
                                    <th>Nama Kegiatan</th>
                                    <th>Peserta</th>
                                </tr>
                                {{-- @php
                                    // $array = $data;
                                    $object = json_encode(json_decode($data[0]));
                                @endphp --}}
                                {{-- @php
                                    $object = json_encode($data);
                                    $object1 = json_decode($object);
                                @endphp --}}
                                {{-- @if (is_iterable($data)) --}}
                                        <tr>
                                            <td>
                                                {{ $data->anggota[0]->nama }}
                                            </td>
                                            <td>
                                                {{ $data->datakegiatan[0]->nama_kegiatan }}
                                            </td>
                                        </tr>
                                {{-- @endif --}}
                                {{-- @endif --}}
                            </table>
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
