<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div class="container mt-4">
        <h4>{{ $pageTitle }}</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded3 border">
            <div class="bi-house-fill me-3 fs-1"></div>
            <h4 class="mb-0">Ini adalah halaman {{ $pageTitle }}.</h4>
        </div>
    </div>
    @endsection
    @vite('resources/js/app.js')
</body>

</html>
