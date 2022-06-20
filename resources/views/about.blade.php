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
                <div class="row gutters-sm ">
                    <div class="col-md-5 my-2">
                        <img src="https://birohmah.unila.ac.id/wp-content/uploads/2020/10/Header-Birohmah.png"
                            class="rounded img-fluid" alt="">
                    </div>
                    <div class="col-md-7 my-2">
                        <div class="container">
                            <h3>About Kaderisasi Birohmah</h3>
                            <p class="mt-3">Kaderisasi Birohmah adalah Departemen yang berdiri dibawah UKMU Birohmah
                                Universitas
                                Lampung sebagai pusat pengaderan dan pengembangan SDM yang ada pada UKMU Birohmah Unila
                                melalui kegiatan dan event yang diselenggarakan oleh Kaderisasi Birohmah Unila. </p>
                        </div>
                    </div>
                </div>

                <div class="row gutters-md mt-3">
                    <div class="col-md-7 my-5">
                        <h3>About Birohmah</h3>
                        <p class="mt-3">Bina Rohani Islam Mahasiswa atau disebut juga Birohmah adalah Unit Kegiatan Mahasiswa berbasis
                            kerohanian
                            yang ada di Universitas Lampung sebagai salah satu organisasi yang bergerak di bidang dakwah.
                            Birohmah
                            Masjid Al-Wasi’i Universitas Lampung berdiri pada tanggal 1 Mei 1992 dan merupakan Unit Kegiatan
                            Mahasiswa
                            (UKM) resmi kampus Universitas Lampung di tingkat Universitas. Keberadaan organisasi dakwah ini
                            merupakan
                            salah satu upaya pengurus Masjid Al-Wasi’i untuk mengkoordinir kegiatan kerohanian islam
                            mahasiswa di
                            lingkungan Masjid kampus Al-Wasii Universitas Lampung, serta di seluruh Fakultas di Universitas
                            Lampung.</p>
                    </div>
                    <div class=" col-md-5 mb-3 mt-5 ">
                        <div class="container mt-2 d-flex justify-content-center">
                            <img src="{{ asset('assets/Logo-BIROHMAH.png') }}" width="244px" height="250px" class=" rounded img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
