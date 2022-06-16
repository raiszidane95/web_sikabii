
<section>
    <div class="container bg-light px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h1 class="fw-bolder">Event Kaderisasi Birohmah</h1>
                    <p class="lead fw-normal text-muted py-4
                    ">Kegiatan dan event Kaderisasi Birohmah
                        Universitas Lampung.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-10 gx-5">
            @foreach ($data as $post)
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top"  src="{{ asset('gambarkegiatanbaru/' . $post->gambar) }}"/>
                        <div class="card-body p-4">
                            <div class="badge bg-main-color bg-gradient rounded-pill mb-2">{{ $post->status }}</div>
                            <a class="text-decoration-none link-dark stretched-link"
                                href="/kegiatan/{{ $post->id_kegiatan }}">
                                <h5 class="card-title mb-3">{{ $post->nama_kegiatan}}</h5>
                            </a>
                            <p class="card-text mb-0 " style="">{!! Str::limit($post->deskripsi_kegiatan, '30') !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
