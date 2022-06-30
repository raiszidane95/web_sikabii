@extends('Layouts.main')

@section('header')
    <div class="container text-center">
        <h3>Login Akun</h3>
        <h5>Kaderisasi Birohmah Unila</h5>
    </div>

    <div class="container mt-5">
        <div class="row row-cols-auto">
            <div class=" container col-auto">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('loginerror'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginerror') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card h-100 border-0 shadow">
                    <div class="container m-auto my-3 mt-4">
                        <form action="/login" method="POST">
                            @csrf
                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" id="password" class="form-control" value="{{ old('email') }}" autofocus required>
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" id="password" required>
                            </div>
                            <div class="mb-1">
                                <p>Belum memiliki akun? <a href="/register">Daftar disini!</a>
                                </p>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" container mt-5 me-10 text-end">
        <a href="/">
            <i class="bi bi-arrow-left"></i>
            Kembali ke Halaman utama
        </a>
    </div>
    </div>
@endsection
