<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->string('namaBarang',100);
            $table->smallInteger('jumlah');
            $table->bigInteger('harga');            
            $table->smallInteger('berat');
            $table->string('gambar',255);
            $table->bigInteger('fk_id_brand');
            $table->bigInteger('fk_id_kategori');
            $table->bigInteger('fk_id_promo');
            $table->bigInteger('fk_id_review');
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable();
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
