@extends('Layouts.main')

@section('header')
    <div class="container text-center">
        <h3>Daftar Akun</h3>
        <h5>Kaderisasi Birohmah Unila</h5>
    </div>
    <div class="container mt-5">
        <div class="row row-cols-auto">
            <div class="container col-sm-5">
                <div class="card rounded border-0 shadow">
                    <div class="card h-100 border-0 shadow">
                        <div class="container m-auto my-3 mt-4">
                            <form action="/register" method="POST" class="row g-1">
                                @csrf
                                <input type="hidden" class="form-control " name="role" value="2">
                                <div class="col-">
                                    <label for="inputEmail4" class="form-label">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        name="nama" id="Nama" placeholder="Nama" required
                                        value="{{ old('nama') }}">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="email" placeholder="Email" required
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Password</label>
                                    <div class="input-group" id="password" name="password">
                                        <input class="form-control @error('password') is-invalid @enderror" id="password"
                                            name="password" type="password" placeholder="Password" required>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Confirm Password</label>
                                    <div class="input-group" id="confirm" name="confirm">
                                        <input class="form-control @error('confirm') is-invalid @enderror" id="confirm"
                                            name="confirm" type="password" placeholder="Confirm Password" required>
                                        @error('confirm')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="col-md-6 captcha">
                                        <span>{!! captcha_img() !!}</span>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <input id="captcha" type="text"
                                            class="form-control @error('captcha') is-invalid @enderror"
                                            placeholder="Enter Captcha" name="captcha" required>
                                        @error('captcha')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mt-3 ">
                                    <button type="submit" class="btn btn-primary align-items-end ">Daftar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
