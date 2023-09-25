<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    {{-- bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="d-flex justify-content-center pt-5 mt-5 container col-6">
        <div class="card">
            <div class="row no-gutters">
                <div class="col-6">
                    <img src="{{ asset('images/exam.jpg') }}" class="card-img" alt="Gambar">
                </div>
                <div class="col-6">
                    <div class="card-body align-items-center">
                        <h5 class="card-title mb-5">Formulir Login</h5>
                        <form action="" method="" class="">
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control mb-3" placeholder="Masukkan email">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" class="form-control mb-3" placeholder="Password">
                            </div>
                            <div class="text-end">
                                <button type="button" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: black; position: absolute; bottom: 0; width: 100%;">
        <div class="container justify-content-center">
            <h4 class="text-white pt-5" >Live Code 27 September 2023</h4>
            <p class="text-white text-center py-2" >Selamat mengerjakan. Semoga Sukses! - FP & JC & CY</p>
        </div>
    </div>
</body>
</html>