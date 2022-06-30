@extends('admin.layout.main')
@section('content')

    <body>
        <div class="container ">
            <div class="col-lg-10">
                <h3>Data Kader</h3>
                <div class="card mt-3">
                    <div class="card-body">
                        <a href="/admin/data-kader/export" class="btn btn-success">Export</a>
                        <table class="table">
                            <tr>
                                <th>Nama</th>
                                <th>Departemen </th>
                                <th>Kepengurusan</th>
                            </tr>
                            @foreach ($data as $item)
                                <tr>
                                    <td>
                                        <a href="/admin/data-kader/{{ $item->id_anggota }}">
                                            {{ $item->nama }}
                                        </a>
                                    </td>
                                    @if ($item->departemen == null)
                                        <td class="text-secondary">Data Kosong</td>
                                        <td class="text-secondary">Data Kosong</td>
                                    @else
                                        <td>
                                            <a href="/admin/data-kader/{{ $item->id_anggota }}">
                                                {{ $item->departemen->nama_departemen }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/admin/data-kader/{{ $item->id_anggota }}">
                                                {{ $item->departemen->kepengurusan->nama_kepengurusan }}
                                            </a>
                                        </td>
                                    @endif

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
