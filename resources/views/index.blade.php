@extends('layout.frontend')
@section('content')
    <div class="container">
        <div class="text-center py-5">
            <h2>Anggota Berizin</h2>
        </div>
        <div class="row">

            {{-- card  --}}
            <div class="col-md-3 mb-5">
                <div class="card shadow" style="max-width: 18rem;">
                    <div class="card-header bg-transparent">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Berizin OJK
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Terverifikasi
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <img src="{{ asset('Assets/joinprop_biru.png') }}" class="p-2 mb-3 img-fluid" width="230px" alt="logo-platform">
                        <h5 class="card-title">Nama Platform</h5>
                        <p class="card-text text-secondary fs-6">Nama PT</p>
                        <p class="card-text">
                            <a href="#" class="text-decoration-none">Kunjungi Website</a>
                        </p>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-center">
                        <i class="bi bi-instagram text-success me-2"></i>
                        <a href="#" class="text-decoration-none text-dark">Akun Instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
