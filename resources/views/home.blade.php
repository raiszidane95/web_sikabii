
@extends('Layouts.main')

<!-- Header-->
@section('header')
    <!-- Title-->
    <div class="container px-5 ">
        <div class="my-5 text-center">
            <h1 class="display-6 fw-bolder text-black mb-2">Website Kaderisasi Birohmah<br>Universitas Lampung
            </h1>
        </div>

        <!-- Carousel-->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://birohmah.unila.ac.id/wp-content/uploads/2020/10/Header-Birohmah.png"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex d-none d-md-block ">
                        <h2>Birohmah Universitas Lampung</h2>
                        <p class="lead text-center fw-normal text-light ">"Menebar Dakwah, Merajut Ukhuwah"</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://birohmah.unila.ac.id/wp-content/uploads/2020/10/Birohmah-Unila-3.png"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex d-none d-md-block">
                        <h2>Birohmah Universitas Lampung</h2>
                        <p class="lead text-center fw-normal text-light">"Menebar Dakwah, Merajut Ukhuwah"</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Testimonial section-->
    <div class="py-5 bg-light">
        <div class="container my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-10 col-xl-7">
                    <div class="text-center">
                        <div class="fs-4 mb-4 fst-italic">"Kader sejati yakin bahwa Allah SWT akan senantiasa membuka
                            jalan bagi pejuang Da'wah sesuai dengan janji-Nya"</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="fw-bold">
                                KH. Rahmat Abdullah
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!--Call to Action-->
    <div class="container px-5 py-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-2 text-center ">
                    <h2>Birohmah Universitas Lampung</h2>
                    <p class="lead text-center fw-normal text-dark mb-4">"Menebar Dakwah, Merajut Ukhuwah"</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center ">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="/register">Gabung</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kegiatan-->
    <section class="py-5">
        <section>
            <div class="container bg-light px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h1 class="fw-bolder">Event Kaderisasi Birohmah</h1>
                            <p class="lead fw-normal text-muted py-4
                            ">Kegiatan dan event
                                Kaderisasi Birohmah
                                Universitas Lampung.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mt-10 gx-5">

                    @foreach ($data as $post)
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="{{ asset('gambarkegiatanbaru/' . $post->gambar) }}" />
                                <div class="card-body p-4">
                                    <div class="badge bg-main-color bg-gradient rounded-pill mb-2">{{ $post->status }}
                                    </div>
                                    <a class="text-decoration-none link-dark stretched-link"
                                        href="/kegiatan/{{ $post->id_kegiatan }}">
                                        <h5 class="card-title mb-3">{{ $post->nama_kegiatan }}</h5>
                                    </a>
                                    <p class="card-text mb-0 " style="">{!! Str::limit($post->deskripsi_kegiatan, '30') !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </section>
@endsection
