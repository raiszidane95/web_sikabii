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
                        <div class="row ">
                            <div class="col-md-4">
                                <img src="{{ asset('logokabinet/' . $data->logo) }}"
                                    class="shadow img-fluid mx-2 my-3 justify-content-center" alt="">

                                <div class="container">
                                    <div class="card-block px-3 py-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Departemen</h4>
                                            </div>
                                            <div class="card-body">
                                                <p class="text-dark m-b-15">Daftar departemen kepengurusan
                                                    {{ $data->nama_kepengurusan }}</p>
                                                @foreach ($data->departemen as $item)
                                                    <ul class="list-unstyled my-0">
                                                        <li><a href="/departemen/{{ $item->id_departemen }}">
                                                                {{ $item->nama_departemen }}</a></li>
                                                    </ul>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 px-3 position-relative">
                                <div class="container">
                                    <div class="card-block px-3 py-3">
                                        <h4 class="card-title">{{ $data->nama_kepengurusan }}</h4>
                                        <p class="card-text">Visi: <br> "{{ $data->visi }}"</p>
                                        <p class="card-text">Misi: <br> {!! $data->misi !!}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
