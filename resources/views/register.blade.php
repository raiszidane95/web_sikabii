@extends('Layouts.main')

@section('content')
    <div class="container text-center">
        <h3>Daftar Akun</h3>
        <h5>Kaderisasi Birohmah Unila</h5>
    </div>
    <div class="container mt-5">
        <div class="row row-cols-auto">
            <div class=" container col-auto col-6">
                <form class="row g-1">
                    <div class="col-">
                        <label for="inputEmail4" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="Nama" placeholder="Nama">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Password</label>
                        <input type="text" class="form-control" id="Password"
                            placeholder="Password">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Confirm Password</label>
                        <input type="text" class="form-control" id="ConfirmPassword"
                            placeholder="Confirm">
                    </div>
                    <div class="col-12 mt-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div>
                    <div class="col-12 ">
                        <button type="submit" class="btn btn-primary ">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
