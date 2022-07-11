<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kaderisasi Birohmah | Unila</title>

    <!-- Favicon-->
    <link rel="icon" href="{{ asset('assets/Logo-BIROHMAH.png') }}">

    <!-- Bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/Datepicker.js/dist/css/datepicker.material.css') }}">
    <script src="{{ asset('assets/Datepicker.js/dist/datepicker.js') }}"></script>
</head>

<body>



    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-main-color fs-5 fw-light ">
        <div class="container px-5">
            <a href="/">
                <img src="{{ asset('assets/Logo-Web-Birohmah-Putih.png') }}" alt="..." class="navbar-brand">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/kegiatan">Kegiatan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/kepengurusan">Kepengurusan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-expanded="false">Halo!, {{ Str::limit(auth()->user()->nama, 5) }}</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/profile"><i class="bi bi-person "></i>
                                        Profile</a></li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="bi bi bi-box-arrow-right"></i> Logout</button>
                                    </form>

                                </li>
                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>

                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header class="bg-body py-5">
        <div class="container px-2">
            @yield('header')
        </div>

        <!--Content-->
        <div class="container px-2">
            @yield('content')
        </div>
    </header>

    <!-- Footer-->
    <footer class="bg-main-color py-4 mt-auto">
        <div class="container p-4">
            <!--Grid row-->
            <div class="row mt-4 text-white">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4 ">About us</h5>

                    <p>
                        Kaderisasi Bina Rohani Islam Mahasiswa (Birohmah) adalah Departemen yang menangani pengaderan
                        pada UKMU Birohmah Univeritas Lampung
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4 pb-1">Hubungi Kami</h5>

                    <ul class="fa-ul" style="margin-left: 1.65em;">
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-envelope"></i></span><span
                                class="ms-2">+62 858-3256-9726</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-home"></i></span><span
                                class="ms-2">birohmahuniversitaslampun@gmail.com</span>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">ALamat</h5>
                    <p>Lantai Dasar Masjid Al Wasii, Universitas Lampung. Jl. Prof. Dr. Ir. Sumantri Brojonegoro, Gedong
                        Meneng, Rajabasa, Bandar Lampung Bandar Lampung</p>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->


        <div class="container px-4">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; Kaderisasi Birohmah Unila 2022</div>
                </div>
            </div>
        </div>
    </footer>
</body>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script type="text/javascript">
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
</script>

</html>
