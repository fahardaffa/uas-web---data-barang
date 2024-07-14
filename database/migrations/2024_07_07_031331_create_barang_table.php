<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('barang_id');
            $table->string('barang_nama', 100); // Menambahkan panjang karakter maksimal
            $table->string('barang_kategori', 50); // Menambahkan panjang karakter maksimal
            $table->integer('barang_jumlah'); // Mengubah tipe data ke integer
            $table->decimal('barang_harga', 8, 2); // Mengubah tipe data ke decimal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
