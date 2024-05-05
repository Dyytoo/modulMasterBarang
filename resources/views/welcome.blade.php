<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/welcome_style.css' )}}">
    <title>Modul Master Barang</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
        <div class="container text-center my-5 py-5 rounded-pill shadow" id="bg-box">
            <h1 class="mb-4 fw-bold text-light" id="judul-welcome">Modul Master Barang</h1>
            <img class="" src="{{ Vite::asset('resources/images/logo.png') }}" alt="image">
            <div class="col-md-2 offset-md-5 mt-4">
                <div class="d-grid gap-2">
                    <a class="btn shadow fw-normal" href="{{ route('home') }}" id="btn-masuk">Masuk</a>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
