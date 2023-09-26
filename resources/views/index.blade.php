@extends('layout.frontend')
@section('content')

    {{-- 1. anggota yang berizin OJK --}}
    <div class="container">
        <div class="text-center py-5">
            <h2>Anggota Berizin</h2>
        </div>
        <div class="row">

            {{-- suggest: foreach --}}

            @for ($i = 0; $i < 1; $i++)
                <div class="col-md-3 mb-5 h-100">
                    <div class="card shadow" style="max-width: 18rem;">
                        <div class="card-header bg-transparent">
                            <div class="row">
                                <div class="col-6 d-flex justify-content-center">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Berizin OJK
                                </div>
                                <div class="col-6 d-flex justify-content-center">
                                    <i class="bi bi-check-circle-fill text-secondary me-2"></i>
                                    Terverifikasi
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <div class="align-items-center justify-content-center d-flex" style="height: 150px">
                                <img src="{{ asset('Assets/joinprop_biru.png') }}" class="p-2 mb-3 img-fluid" width="230px" alt="logo-platform">
                            </div>
                            <h5 class="card-title">Nama Platform</h5>
                            <p class="card-text text-secondary fs-6">Nama PT</p>
                            <p class="card-text">
                                <a href="#" target="_blank" class="text-decoration-none">Kunjungi Website</a>
                            </p>
                        </div>
                        <div class="card-footer bg-transparent d-flex justify-content-center">
                            <i class="bi bi-instagram text-success me-2"></i>
                            <a href="#" target="_blank" class="text-decoration-none text-dark">Akun Instagram</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    {{-- 2. anggota yang berizin dan sudah terverifikasi --}}
    <div class="container">
        <div class="text-center py-5">
            <h2>Anggota Berizin dan Terverifikasi</h2>
        </div>
        <div class="row">

            {{-- suggest: foreach --}}

            @for ($i = 0; $i < 1; $i++)
                <div class="col-md-3 mb-5 h-100">
                    <div class="card shadow" style="max-width: 18rem;">
                        <div class="card-header bg-transparent">
                            <div class="row">
                                <div class="col-6 d-flex justify-content-center">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Berizin OJK
                                </div>
                                <div class="col-6 d-flex justify-content-center">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Terverifikasi
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <div class="align-items-center justify-content-center d-flex" style="height: 150px">
                                <img src="{{ asset('Assets/joinprop_biru.png') }}" class="p-2 mb-3 img-fluid" width="230px" alt="logo-platform">
                            </div>
                            <h5 class="card-title">Nama Platform</h5>
                            <p class="card-text text-secondary fs-6">Nama PT</p>
                            <p class="card-text">
                                <a href="#" target="_blank" class="text-decoration-none">Kunjungi Website</a>
                            </p>
                        </div>
                        <div class="card-footer bg-transparent d-flex justify-content-center">
                            <i class="bi bi-instagram text-success me-2"></i>
                            <a href="#" target="_blank" class="text-decoration-none text-dark">Akun Instagram</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    {{-- 3. anggota yang masih menunggu izin OJK --}}
    <div class="container">
        <div class="text-center py-5">
            <h2>Anggota Menunggu Izin OJK</h2>
        </div>
        <div class="row">

            {{-- suggest: foreach --}}

            @for ($i = 0; $i < 2; $i++)
                <div class="col-md-3 mb-5 h-100">
                    <div class="card shadow" style="max-width: 18rem;">
                        <div class="card-header bg-transparent">
                            <div class="row">
                                <div class="col-6 d-flex justify-content-center">
                                    <i class="bi bi-check-circle-fill text-secondary me-2"></i>
                                    Berizin OJK
                                </div>
                                <div class="col-6 d-flex justify-content-center">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Terverifikasi
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <div class="align-items-center justify-content-center d-flex" style="height: 150px">
                                <img src="{{ asset('Assets/joinprop_biru.png') }}" class="p-2 mb-3 img-fluid" width="230px" alt="logo-platform">
                            </div>
                            <h5 class="card-title">Nama Platform</h5>
                            <p class="card-text text-secondary fs-6">Nama PT</p>
                            <p class="card-text">
                                <a href="#" target="_blank" class="text-decoration-none">Kunjungi Website</a>
                            </p>
                        </div>
                        <div class="card-footer bg-transparent d-flex justify-content-center">
                            <i class="bi bi-instagram text-success me-2"></i>
                            <a href="#" target="_blank" class="text-decoration-none text-dark">Akun Instagram</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    {{-- 4. seluruh anggota --}}
    <div class="container">
        <div class="text-center py-5">
            <h2>Seluruh Anggota</h2>
        </div>
        <div class="row">

            {{-- suggest: foreach --}}

            @for ($i = 0; $i < 4; $i++)
                <div class="col-md-3 mb-5 h-100">
                    <div class="card shadow" style="max-width: 18rem;">
                        <div class="card-header bg-transparent">
                            <div class="row">
                                <div class="col-6 d-flex justify-content-center">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    Berizin OJK
                                </div>
                                <div class="col-6 d-flex justify-content-center">
                                    <i class="bi bi-check-circle-fill text-secondary me-2"></i>
                                    Terverifikasi
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <div class="align-items-center justify-content-center d-flex" style="height: 150px">
                                <img src="{{ asset('Assets/joinprop_biru.png') }}" class="p-2 mb-3 img-fluid" width="230px" alt="logo-platform">
                            </div>
                            <h5 class="card-title">Nama Platform</h5>
                            <p class="card-text text-secondary fs-6">Nama PT</p>
                            <p class="card-text">
                                <a href="#" target="_blank" class="text-decoration-none">Kunjungi Website</a>
                            </p>
                        </div>
                        <div class="card-footer bg-transparent d-flex justify-content-center">
                            <i class="bi bi-instagram text-success me-2"></i>
                            <a href="#" target="_blank" class="text-decoration-none text-dark">Akun Instagram</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
