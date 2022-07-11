@extends('Layouts.main')
@section('header')
    <div class="container px-4">
    </div>
@endsection

@section('content')
    <div class="container mt-5 px-4">
        <!-- Image Showcases-->
        <div class="container mt-4">
            <div class="main-body">
                <div class="container py-3">
                    <div class="card shadow">
                        <div class="container mt-3 my-3 mx-4 ps-3 pt-2">
                            <h3 class="card-title">Departemen</h3>
                            <h5><strong>{{ $data->nama_departemen }}</strong></h5>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="container mt-2 mx-3">
                                    <div class="bg-main-color rounded mw-100">
                                        <strong class="mx-3 mb-0 text-light">Kepala Departemen : </strong>
                                    </div>
                                    <p class="mx-3 mt-0">{{ $data->kepala_departemen }}</p>
                                    <div class="bg-main-color rounded mw-100">
                                        <strong class="mx-3 mb-0 text-light">Sekertaris Departemen :</strong>
                                    </div>
                                    <p class="mx-3 mt-0">{{ $data->sekertaris_departemen }}</p>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="container my-0 mx-3">
                                    <div class="bg-main-color my-2 rounded mw-100">
                                        <strong class="mx-3 mb-0 text-light">Anggota :</strong>
                                    </div>
                                    <table class="table table-sm table-striped table-bordered dataTable no-foote">
                                        <tr>
                                            <th>Nama</th>
                                            <th>NPM</th>
                                            <th>Fakultas</th>
                                        </tr>
                                        @foreach ($data->anggota as $item)
                                            <tr>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->npm }}</td>
                                                <td>F{{ $item->fakultas }}</td>
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
@endsection
