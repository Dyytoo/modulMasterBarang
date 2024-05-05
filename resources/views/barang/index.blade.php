<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                            class="nav-link ">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('barangs.index') }}"
                            class="nav-link active">Daftar Barang</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i
                        class="bi-person-circle me-1"></i> Profil</a>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('barangs.create') }}" class="btn text-light" id="btn-tambah-barang">Tambah Barang</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Deskripsi</th>
                        <th>Harga Barang</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#332</td>
                        <td>Jeruk</td>
                        <td>Buah berbentuk Bulat</td>
                        <td>2000</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('barangs.show', ['barang' => 1]) }}"
                                    class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                <a href="{{ route('barangs.edit', ['barang' => 1]) }}"
                                    class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
                                <div>
                                    <form action="{{ route('barangs.destroy', ['barang' => 1]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i
                                                class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#222</td>
                        <td>Tomat</td>
                        <td>Kadang Buah, Kadang Sayur</td>
                        <td>5000</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('barangs.show', ['barang' => 2]) }}"
                                    class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                <a href="{{ route('barangs.edit', ['barang' => 2]) }}"
                                    class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
                                <div>
                                    <form action="{{ route('barangs.destroy', ['barang' => 2]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i
                                                class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#112</td>
                        <td>Kacang</td>
                        <td>Biji Bijian yang bisa digoreng</td>
                        <td>4500</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('barangs.show', ['barang' => 3]) }}"
                                    class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                <a href="{{ route('barangs.edit', ['barang' => 3]) }}"
                                    class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
                                <div>
                                    <form action="{{ route('barangs.destroy', ['barang' => 3]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i
                                                class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
