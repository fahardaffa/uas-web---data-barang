@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Data Barang Maju Jaya</h3>
    <div class="card">
        <div class="card-body">
            <form class="form-inline mb-3" method="get" action="{{ route('barang.search') }}">
                <div class="form-group w-75">
                    <input type="text" name="search" class="form-control w-100" id="search" placeholder="Masukkan keyword">
                </div>
                <button type="submit" class="btn btn-primary ml-2">Cari</button>
            </form>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NAMA</th>
                        <th>KATEGORI</th>
                        <th>JUMLAH</th>
                        <th>HARGA</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($barang as $row)
                        <tr>
                            <td>{{ $row->barang_nama }}</td>
                            <td>{{ $row->barang_kategori }}</td>
                            <td>{{ $row->barang_jumlah }}</td>
                            <td>{{ $row->barang_harga }}</td>
                            <td>
                                <a href="{{ url('barang/' . $row->barang_id . '/edit') }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('barang.show', ['barang' => $row->barang_id]) }}" class="btn btn-info">Lihat</a>
                                <form action="{{ route('barang.destroy', ['barang' => $row->barang_id]) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ url('barang/create') }}" class="btn btn-success mt-3">Tambah Data</a>
        </div>
    </div>
</div>
@endsection
