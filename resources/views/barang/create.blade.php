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
        <div class="container-sm mt-5">
            <form action="{{ route('barangs.store') }}" method="POST">
                @csrf
                <div class="row justify-content-center">
                    <div class="p-5 bg-light rounded-3 border col-xl-6">
                        <div class="mb-3 text-center">
                            <i class="bi-person-circle fs-1"></i>
                            <h4>Tambah Barang</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="kodeBarang" class="form-label">Kode Barang</label>
                                <input class="form-control @error('kodeBarang') isinvalid @enderror" type="text"
                                    name="kodeBarang" id="kodeBarang" value="{{ old('kodeBarang') }}"
                                    placeholder="Masukkan Kode Barang">
                                @error('kodeBarang')
                                    <div class="textdanger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="namaBarang" class="form-label">Nama Barang</label>
                                <input class="form-control @error('namaBarang') isinvalid @enderror" type="text"
                                    name="namaBarang" id="namaBarang" value="{{ old('namaBarang') }}"
                                    placeholder="Masukkan Nama Barang">
                                @error('namaBarang')
                                    <div class="textdanger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label><input
                                    class="form-control @error('deskripsi') is-invalid@enderror" type="text" name="deskripsi"
                                    id="deskripsi" value="{{ old('deskripsi') }}"placeholder="Masukkan Deskripsi">
                                @error('deskripsi')
                                    <div class="textdanger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input class="form-control @error('harga') is-invalid@enderror" type="text" name="harga"
                                    id="harga" value="{{ old('harga') }}" placeholder="Masukkan Harga">
                                @error('harga')
                                    <div class="textdanger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="satuan" class="formlabel">Satuan</label>
                                <select name="satuan" id="satuan" class="formselect">
                                    @foreach ($satuans as $satuan)
                                        <option value="{{ $satuan->id }}"
                                            {{ old('satuan') == $satuan->id ? 'selected' : '' }}>
                                            {{ $satuan->code . ' - ' . $satuan->name }}</option>
                                    @endforeach
                                </select>
                                @error('satuan')
                                    <div class="textdanger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 d-grid">
                                <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                        class="bi-arrow-left-circle me-2"></i>
                                    Cancel</a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-dark btn-lg mt3"><i class="bi-check-circle me-2"></i>
                                    Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endsection

    @vite('resources/js/app.js')
</body>

</html>
