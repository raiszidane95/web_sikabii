@extends('admin.layout.main')
@section('content')

    <body>
        <div class="container ">
            <div class="col-lg-10">
                <h3>Data Kader</h3>
                <div class="card mt-3">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Nama</th>
                                <th>Departemen </th>
                                <th>Action</th>
                            </tr>

                            <tr>
                                <td>Ari Lesmana</td>
                                <td>Kaderisasi</td>
                                <td>
                                    <button class="btn btn-warning" onClick="show()">Edit</button>
                                    <button class="btn btn-danger" onClick="destroy()">Delete</button>
                                </td>
                            </tr>
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
