@extends('layout.frontend')
@section('content')
<form action="#" method="post">
    <div class="container mt-5 d-flex justify-content-center col-12">
        <div class="mb-3 col-7">
            <label for="searchBox" class="form-label d-flex justify-content-center">Search</label>
            <input type="" class="form-control" id="searchBox" aria-describedby="search" placeholder="Cth: nama platform / nama PT ">
        </div>
    </div>
    <div class="container d-flex justify-content-around col-6 mb-3">
        <div class="col-4 mx-1">
            <label for="ojk">Berizin OJK</label>
            <select id="ojk" class="form-select" aria-label="Default select example">
                <option selected disabled>pilih..</option>
                <option value="1">YA</option>
                <option value="0">TIDAK</option>
            </select>
        </div>
        <div class="col-4 mx-1">
            <label for="terverifikasi">Terverifikasi</label>
            <select class="form-select" id="terverifikasi" aria-label="Default select example">
                <option selected disabled>pilih...</option>
                <option value="1">YA</option>
                <option value="0">TIDAK</option>
            </select>
        </div>
        <div class="col-4 mx-1">
                <label for="searchBox">Tahun Pembukaan</label>
                <input type="" class="form-control" id="searchBox" aria-describedby="search" placeholder="Cth: 2020 ">
        </div>
    </div>
    <div class="justify-content-center d-flex">
        <button type="submit" class="btn btn-primary col-6">Search</button>
    </div>

</form>

{{-- bisa aktifkan if dibawah ini? 
    jadi, ketika data ditemukan maka akan muncul card, jika tidak ditemukan maka muncul pesan --}}
    
{{-- @if (isset($hasil_pencarian)) --}}
    <div class="container">
        <div class="text-center py-5">
            <h2>Hasil Pencarian</h2>
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

{{-- @else --}}

{{-- <div class="container">
    <div class="text-center py-5">
        <h2>Tidak ada data yang cocok</h2>
    </div>
</div> --}}

{{-- @endif --}}

@endsection