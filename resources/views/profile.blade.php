@extends('Layouts.main')

@section('header')
    <h3 class="text-start ps-3">Profile Kader</h3>
    {{-- <p>{{ auth()->user()->nama, }}</p>
    <p>{{ auth()->user()->email, }}</p> --}}
@endsection

@section('content')
    <div class="container mt-4">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                @if (auth()->user()->foto)
                                    <div class="overflow-hidden">
                                        <img src="{{ asset('fotoprofile/' . auth()->user()->foto) }}"
                                            class="rounded-circle" width="150" height="150" alt="Admin">
                                    </div>
                                @else
                                    <img src="https://inspektorat.kotawaringinbaratkab.go.id/public/uploads/user/default-user-imge.jpeg"
                                        class=" rounded-circle" width="100" height="100" alt="Admin">
                                @endif
                                <div class="mt-3">
                                    <h4>{{ auth()->user()->nama }}</h4>
                                    <p class="text-secondary mb-1">{{ auth()->user()->jurusan }}</p>
                                    <p class="text-muted font-size-sm">F{{ auth()->user()->fakultas }}
                                        {{ auth()->user()->angkatan }}</p>
                                    <a href="/profile/edit/{{ auth()->user()->id_anggota }}">
                                        <button class="btn btn-primary">Edit Profile</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3 shadow">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">Email</h6>
                                <span class="text-secondary">{{ auth()->user()->email }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">Nomor Handphone</h6>
                                <span class="text-secondary">{{ auth()->user()->no_handphone }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3 shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Tempat & Tanggal Lahir</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->tempat_lahir }}, {{ auth()->user()->tanggal_lahir }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Departemen</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->departemen->nama_departemen }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Jenis Kelamin</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->jenis_kelamin }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Alamat Asal</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->alamat_asal }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Alamat Domisili (tinggal) </h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->alamat_domisili }}
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
                                        @if (count(auth()->user()->rekamkegiatan) == 0)
                                        <p>Belum pernah mengkuti kegiatan</p>
                                        @else
                                        <tr>
                                            <th>Nama Kegiatan</th>
                                            <th>Status</th>
                                        </tr>
                                            @php
                                                $array = auth()->user()->datakegiatan;
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
@endsection
