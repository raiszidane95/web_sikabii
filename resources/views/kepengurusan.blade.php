@extends('Layouts.main')
@section('header')
    <div class="container px-4">
    </div>
@endsection

@section('content')
    <div class="container mt-5 px-4">
        <!-- Image Showcases-->
        <div class="container mt-4">
            @foreach ($data as $item)
                <div class="main-body">
                    <div class="container py-3">
                        <div class="card shadow">
                            <div class="row ">
                                <div class="col-md-4">
                                    <img src="{{ asset('logokabinet/' . $item->logo) }}"
                                    class="shadow img-fluid mx-2 my-3 d-block justify-content-center" alt="">
                                </div>
                                <div class="col-md-8 px-3 position-relative">
                                    <div class="card-block px-3 py-3">
                                        <h4 class="card-title">{{ $item->nama_kepengurusan }}</h4>
                                        <strong class="card-title">{{ $item->tahun_kepengurusan }}</strong>
                                        <br>
                                        <br>
                                        <p class="card-text">Visi: <br> {!! Str::limit($item->visi, '50') !!}</p>
                                        <p class="card-text">Misi: <br> {!! Str::limit($item->misi, '50') !!}</p>
                                        <br><br>
                                        <a href="/kepengurusan/{{ $item->id_kepengurusan }}" class="btn btn-primary">Selengkapnya</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
