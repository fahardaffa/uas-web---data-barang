@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h3 class="mb-4">Detail Barang</h3>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $barang->barang_nama }}</h5>
                <p class="card-text"><strong>Kategori:</strong> {{ $barang->barang_kategori }}</p>
                <p class="card-text"><strong>Jumlah:</strong> {{ $barang->barang_jumlah }}</p>
                <p class="card-text"><strong>Harga:</strong> {{ $barang->barang_harga }}</p>
                <a href="{{ route('barang.index') }}" class="btn btn-primary mt-3">Kembali ke Daftar Barang</a>
            </div>
        </div>
    </div>
@endsection
