<nav class="navbar navbar-expand-lg navbar-light shadow shadow-sm container">
    <div class="container-fluid d-flex justify-content-between">
        <div>
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('Assets/joinprop_biru.png') }}" class="img-fluid"
                    width="150px" alt=""></a>
        </div>
        @if (!request()->is('login'))
            @if (!request()->is('search'))
                <div>
                    <div>
                        <a href="{{ route('search') }}" class="text-decoration-none">
                            <button class="btn btn-outline-secondary" type="submit">Search Project <i class="bi bi-search"></i></button>
                        </a>
                    </div>
                </div>
            @endif
            @if (!Auth::user())
                <div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        </ul>
                        <div>
                            <a href="{{ route('login') }}" class="text-decoration-none">
                                <button class="btn btn-outline-primary" type="submit">Login</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        @endif
    </div>
</nav>
