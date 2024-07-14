@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Edit Data Barang</h3>
    <form action="{{ route('barang.update', ['barang' => $barang->barang_id]) }}" method="POST">
        @csrf
        @method('PATCH')
        <!-- Form untuk mengedit data barang -->
        <div class="form-group">
            <label for="barang_nama">Nama</label>
            <input type="text" class="form-control" id="barang_nama" name="barang_nama" value="{{ $barang->barang_nama }}">
        </div>
        <div class="form-group">
            <label for="barang_kategori">Kategori</label>
            <input type="text" class="form-control" id="barang_kategori" name="barang_kategori" value="{{ $barang->barang_kategori }}">
        </div>
        <div class="form-group">
            <label for="barang_jumlah">Jumlah</label>
            <input type="text" class="form-control" id="barang_jumlah" name="barang_jumlah" value="{{ $barang->barang_jumlah }}">
        </div>
        <div class="form-group">
            <label for="barang_harga">Harga</label>
            <input type="text" class="form-control" id="barang_harga" name="barang_harga" value="{{ $barang->barang_harga }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection
