@extends('Layouts.main')

@section('header')
    <div class="container text-center">
        <h3>Login Akun</h3>
        <h5>Kaderisasi Birohmah Unila</h5>
    </div>
    <div class="container mt-5">
        <div class="row row-cols-auto">
            <div class=" container col-auto">
                <form>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-1">
                        <p>Belum memiliki akun? <a href="/register">Daftar disini!</a>
                        </p>
                    </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
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
