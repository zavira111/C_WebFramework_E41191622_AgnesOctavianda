<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->increments ('id_produk');
            $table->integer ('id_kategori');
            $table->string ('nama_barang');
            $table->string ('warna');
            $table->string ('bahan');
            $table->integer ('harga');
            $table->text ('keterangan');
            $table->integer ('stok');
            $table->integer ('best_seller');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
