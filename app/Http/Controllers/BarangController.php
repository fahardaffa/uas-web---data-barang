<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all(); // atau cara lain untuk mengambil data barang
        return view('barang.index', compact('barang'));
    }
    
    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'barang_nama' => 'required',
            'barang_kategori' => 'required',
            'barang_jumlah' => 'required',
            'barang_harga' => 'required'
        ],
        [
            'barang_nama.required' => 'NAMA wajib diisi',
            'barang_kategori.required' => 'Kategori wajib diisi',
            'barang_jumlah.required' => 'Jumlah wajib diisi',
            'barang_harga.required' => 'Harga wajib diisi'
        ]);

        Barang::create($request->all());
        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan.');
    }

    public function show($id)
    {
    $barang = Barang::findOrFail($id);
    return view('barang.show', compact('barang'));
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }
    
    public function update(Request $request, $id)
    {
    $barang = Barang::findOrFail($id);

    // Validasi dan update data barang
    $request->validate([
        'barang_nama' => 'required',
        'barang_kategori' => 'required',
        'barang_jumlah' => 'required',
        'barang_harga' => 'required'
    ]);

    $barang->update($request->all());

    return redirect()->route('barang.index')->with('success', 'Barang berhasil diupdate.');
    }

    public function destroy($id)
    {
    $barang = Barang::findOrFail($id);
    $barang->delete();
    return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus.');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $barang = Barang::where('barang_nama', 'like', "%" . $keyword . "%")->paginate();
        return view('barang.index', compact('barang'));
    }
}
