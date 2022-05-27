
@extends('admin.dashboard')
@section('content')

    <body>
        <div class="container ">
            <div class="col-2-lg-10">
                <h6>Detail Kepengurusan</h6>
                <div class="container mt-5 mb-2">
                    <div class="container ml-2">
                        <h2>Kabinet {{ $data->nama_kepengurusan }}</h2>
                        <h5>Tahun {{ $data->tahun_kepengurusan }}</h3>
                    </div>
                    <br>
                    <div class="container ml-4">
                        <h6>Visi</h6>
                        <strong>
                            <p>{{ $data->visi }}</p>
                        </strong>
                        <h6>Misi</h6>
                        <strong>
                            <p>{{ $data->misi }}</p>
                        </strong>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
            </script>
    </body>
@endsection
