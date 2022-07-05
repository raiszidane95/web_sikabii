@extends('Layouts.main')
@section('content')
    <section>
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="mb-5"><strong>Event Kaderisasi Birohmah</strong></h2>
                    </div>
                </div>
            </div>
            <div class="row mt-10 gx-5 justify-content-center">
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0 align-self-center">
                        <img class="card-img-top" src="{{ asset('gambarkegiatanbaru/' . $data->gambar) }}" />
                        <div class="card-body p-4">
                            @if ($data->status == 'Open')
                                <div class="badge bg-main-color bg-gradient rounded-pill mb-2">{{ $data->status }}</div>
                            @elseif ($data->status == 'Closed')
                                <div class="badge bg-warning bg-gradient rounded-pill mb-2">{{ $data->status }}</div>
                            @else
                                <div class="badge bg-success bg-gradient rounded-pill mb-2">{{ $data->status }}</div>
                            @endif

                            <h6>{{ $data->tanggal }}</h6>
                            <p class="card-text mb-0 ">{{ $data->nama_kegiatan }}</p>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row shadow">
                        <div class="col bg-dark bg-opacity-10">
                            <div class="container mt-5">
                                <h3 class="mb-5 text-dark">{{ $data->nama_kegiatan }}</h3>
                                {!! $data->deskripsi_kegiatan !!}
                            </div>
                        </div>
                        <div class="col-md-4 bg-primary bg-opacity-10 shadow">
                            <div class="container mt-5">
                                <div class="container">
                                    <div class="card text-center">
                                        <div class="card-header bg-dark bg-opacity-10">
                                            <strong>Daftar Kegiatan</strong>
                                        </div>
                                        <div class="card-body shadow rounded">
                                            <p><strong>Tertarik untuk mengikuti event ini?</strong></p>
                                            <p>Klik tombol di bawah ini dan silakan untuk mengikuti proses pendaftaran
                                                sesuai ketentuan yang ada!!</p>
                                                @if ($data->status == 'Selesai'or'Closed')
                                                    <strong>Kegiatan Telah selesai!</strong>
                                                    @else
                                                    <form action="/kegiatan/daftar/{{ $data->id_kegiatan }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id_kegiatan" value="{{ $data->id_kegiatan }}"
                                                            class="form-control-file mt-1">
                                                        <input type="hidden" name="id_anggota"
                                                            value="{{ auth()->user()->id_anggota }}" class="form-control-file mt-1">
                                                        <button type="submit" class="btn btn-primary">Daftar</button>
                                                    </form>
                                                @endif
                                        </div>
                                    </div><!-- /# card -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
