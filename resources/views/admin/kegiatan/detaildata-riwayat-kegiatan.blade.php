<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@php
// header('Content-type:application/octet-stream');
// header('Accept-Ranges:bytes');
header('Content-type:application/vnd.ms-excel');
header('Content-Disposition:attachment;filename=Riwayat Kegiatan.xls');
header('Pragma: no-cache');
header('Expires: 0');
@endphp

<body>
    <div class="col-2-lg-10">
        <div class="container ml-4 mt-5">
            <div class="card h-100 shadow">
                <div class="card-body">
                    <h6 class="d-flex align-items-center mb-3">Riwayat Kegiatan {{ $data->nama_kegiatan }}
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
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
