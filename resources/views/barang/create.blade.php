@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Tambah Data Barang</h3>
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ url('/barang') }}">
                @csrf
                <div class="form-group">
                    <label for="barang_nama">Nama</label>
                    <input type="text" class="form-control" id="barang_nama" name="barang_nama" value="{{ old('barang_nama') }}">
                    @if ($errors->has('barang_nama'))
                        <div class="text-danger">{{ $errors->first('barang_nama') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="barang_kategori">Kategori</label>
                    <input type="text" class="form-control" id="barang_kategori" name="barang_kategori" value="{{ old('barang_kategori') }}">
                    @if ($errors->has('barang_kategori'))
                        <div class="text-danger">{{ $errors->first('barang_kategori') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="barang_jumlah">Jumlah</label>
                    <input type="text" class="form-control" id="barang_jumlah" name="barang_jumlah" value="{{ old('barang_jumlah') }}">
                    @if ($errors->has('barang_jumlah'))
                        <div class="text-danger">{{ $errors->first('barang_jumlah') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="barang_harga">Harga</label>
                    <input type="text" class="form-control" id="barang_harga" name="barang_harga" value="{{ old('barang_harga') }}">
                    @if ($errors->has('barang_harga'))
                        <div class="text-danger">{{ $errors->first('barang_harga') }}</div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
