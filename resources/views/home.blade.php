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
                            class="nav-link active">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('barangs.index') }}"
                            class="nav-link">Daftar Barang</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i
                        class="bi-person-circle me-1"></i> Profil</a>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <hr>
        <div class="d-flex align-items-center justify-content-center py-2 px-4 bg-light rounded-2 border">
            <i class="bi bi-file-earmark-ruled mx-2"></i>
            <h4 class="mb-0 fw-normal">Catatan Input Barang</h4>
            <i class="bi bi-file-earmark-ruled mx-2"></i>
        </div>
        <div class="py-2 px-2 mt-3">
            <h5>1. Konsistensi Nama Barang</h5>
            <p>Pastikan nama barang yang diinput konsisten dan mudah dipahami. Hindari penggunaan singkatan atau nama yang ambigu.</p>
            <h5>2. Deskripsi yang Jelas</h5>
            <p>Sertakan deskripsi yang jelas untuk setiap barang, termasuk informasi seperti merek, ukuran, warna, dan fitur khusus.</p>
            <h5>3. Pelatihan Karyawan</h5>
            <p>Pastikan karyawan yang bertanggung jawab untuk menginput barang telah dilatih dengan baik mengenai prosedur dan aturan yang berlaku.</p>
            <h5>4. Backup Data</h5>
            <p>Lakukan backup data secara teratur untuk menghindari kehilangan informasi barang akibat kegagalan sistem atau kejadian tak terduga lainnya.</p>
            <h5>5. Audit Rutin</h5>
            <p>Lakukan audit rutin terhadap inventaris untuk memastikan keakuratan data dan mengidentifikasi perbedaan antara catatan sistem dan jumlah fisik barang.</p>
            <h5>6. Harga Satuan</h5>
            <p>Catat harga satuan untuk setiap barang. Ini membantu dalam menghitung total nilai stok dan mengelola penjualan.</p>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
