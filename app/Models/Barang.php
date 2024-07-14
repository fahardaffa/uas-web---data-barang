<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'barang';

    // Primary key dari tabel
    protected $primaryKey = 'barang_id';

    // Kolom yang dapat diisi
    protected $fillable = [
        'barang_nama', 
        'barang_kategori', 
        'barang_jumlah', 
        'barang_harga'
    ];
}
