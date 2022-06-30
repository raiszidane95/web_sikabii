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
                    <div class="shadow border-0">
                        <div class="card-body p-4">
                            <img class="shadow img-fluid mx-auto mt-3 d-block justify-content-center"
                                src="{{ asset('gambarkegiatanbaru/' . $post->gambar) }}" />
                                @if ($post->status == 'Open')
                                <div class="badge bg-main-color bg-gradient rounded-pill mb-2">{{ $post->status }}</div>

                                @elseif ($post->status == 'Closed')
                                <div class="badge bg-warning bg-gradient rounded-pill mb-2">{{ $post->status }}</div>
                                @else
                                <div class="badge bg-success bg-gradient rounded-pill mb-2">{{ $post->status }}</div>
                                @endif
                            <a class="text-decoration-none text-dark" href="/kegiatan/{{ $post->id_kegiatan }}">
                                <h5>{{ $post->nama_kegiatan }}</h5>
                            </a>
                            <p class="card-text mb-0 " style="">{!! Str::limit($post->deskripsi_kegiatan, '30') !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
