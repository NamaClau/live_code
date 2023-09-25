@extends('layout.frontend')
@section('content')
    <div class="d-flex justify-content-center pt-5 mt-5 container">
        <div class="card shadow" style="max-width: 50rem; border: none; border-radius: 5px;">
            <div class="row">
                <div class="col-6">
                    <img src="{{ asset('images/exam.jpg') }}" class="img-fluid" width="100%" alt="Gambar">
                </div>
                <div class="col-6">
                    <div class="card-body align-items-center">
                        <h5 class="card-title mb-5 text-center mt-4">Formulir Login</h5>
                        <form action="" method="" class="">
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control mb-3" placeholder="Masukkan email">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" class="form-control mb-3" placeholder="Password">
                            </div>
                            <div class="text-center mt-4">
                                <button type="button" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection