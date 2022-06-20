@extends('Layouts.main')

@section('header')
    <h3 class="text-start ps-3">Profile Kader</h3>
@endsection

@section('content')
    <div class="container mt-4">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class=" py-2 d-flex flex-column align-items-center text-center">
                                @if (auth()->user()->foto)
                                    <div class="overflow-hidden">
                                        <img src="{{ asset('fotoprofile/' . auth()->user()->foto) }}"
                                            class="rounded-circle img-fluid" width="100" alt="Admin">
                                    </div>
                                @else
                                    <div class="overflow-hidden">
                                        <img src="https://archive.org/download/no-photo-available/no-photo-available.png"
                                            class="rounded-circle" width="100" height="100" alt="Admin">
                                    </div>
                                @endif

                                <div class="mt-3">
                                    <h4>{{ auth()->user()->nama }}</h4>
                                    <p class="text-secondary mb-1">{{ auth()->user()->jurusan }}</p>
                                    <p class="text-muted font-size-sm">F{{ auth()->user()->fakultas }}
                                        {{ auth()->user()->angkatan }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card shadow">
                        <div class="card-body">
                            <form action="/profile/edit/update/{{ auth()->user()->id_anggota }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nama Lengkap</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                        <input type="text" name="nama" class="form-control"
                                            value="{{ auth()->user()->nama }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                        <input type="text" name="email" class="form-control"
                                            value="{{ auth()->user()->email }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Password</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                        <input type="password" name="password" class="form-control"
                                            value="{{ auth()->user()->password }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">NPM</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                        <input type="text" name="npm" class="form-control"
                                            value="{{ auth()->user()->npm }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Jurusan</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                        <input type="text" name="jurusan" class="form-control"
                                            value="{{ auth()->user()->jurusan }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Fakultas</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                        <input type="text" name="fakultas" class="form-control"
                                            value="{{ auth()->user()->fakultas }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Angkatan</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                        <input type="text" name="angkatan" class="form-control"
                                            value="{{ auth()->user()->angkatan }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Departemen</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                        <select name="id_departemen" class="form-select"
                                            aria-label="Default select example">
                                            <option value="{{ auth()->user()->id_departemen }}" selected>
                                                {{ auth()->user()->departemen->nama_departemen }},
                                                {{ auth()->user()->departemen->kepengurusan->tahun_kepengurusan }}
                                            </option>
                                            @foreach ($departemen as $item)
                                                <option value="{{ $item->id_departemen }}">
                                                    {{ $item->nama_departemen }}
                                                    {{ $item->kepengurusan->tahun_kepengurusan }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Tempat & Tanggal Lahir</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                        <div class="input-group">
                                            <input name="tempat_lahir" type="text" aria-label="Tempat lahir"
                                                value="{{ auth()->user()->tempat_lahir }}" class="form-control">
                                            <input type="text" id="datepicker" name="tanggal_lahir"
                                                placeholder="Tanggal" value="{{ auth()->user()->tanggal_lahir }}"
                                                class=" datepicker form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nomor Handphone</h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                        <input name="no_handphone" type="text" class="form-control"
                                            value="{{ auth()->user()->no_handphone }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Jenis Kelamin</h6>
                                    </div>
                                    <div class="col-sm-4 text-secondary">
                                        <select name="jenis_kelamin" class="form-select"
                                            aria-label="Default select example">
                                            <option selected>{{ auth()->user()->jenis_kelamin }}</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <h6 class="mb-1">Alamat Asal</h6>
                                        <textarea class="form-control" name="alamat_asal" placeholder="Alamat lengkap" id="alamat_asal"
                                            style="height: 100px">{{ auth()->user()->alamat_asal }}</textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <h6 class="mb-1">Alamat Tinggal</h6>
                                        <textarea class="form-control" name="alamat_domisili" placeholder="Alamat lengkap" id="alamat_domisili"
                                            style="height: 100px">{{ auth()->user()->alamat_domisili }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="file_input">Foto</label>
                                    <input type="hidden" id="file-input" name="oldfoto"
                                        value="{{ auth()->user()->foto }}" class="form-control-file mt-1">
                                    <input type="file" id="file-input" name="foto" class="form-control-file mt-1"
                                        value="{{ asset('fotoprofile/' . auth()->user()->foto) }}">
                                    <div id="text-foto" class="form-text">Gunakan dengan rasio 1:1(Square)</div>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
