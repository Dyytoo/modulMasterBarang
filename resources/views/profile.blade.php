<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/home_style.css')}}">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark" id="navbar-box">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1">
                <img src="{{Vite::asset('resources/images/logo.png')}}" alt="logo" class="me-2" id="img-logo">Modul Master Barang</a>
            <button type="button" class="navbar-toggler" data-bstoggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}"
                            class="nav-link">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('barangs.index') }}"
                            class="nav-link">Daftar Barang</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
                <a href="{{ route('profile') }}" class="btn btn-warning text-light my-2 ms-md-auto"><i
                        class="bi-person-circle me-1"></i> Profil</a>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <h4>{{ $pageTitle }}</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded3 border">
            <div class="bi-person-circle me-3 fs-1"></div>
            <h4 class="mb-0">Ini adalah Halaman {{ $pageTitle }}.</h4>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
