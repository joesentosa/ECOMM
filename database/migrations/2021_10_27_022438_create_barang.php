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
            $table->smallInteger('stok');
            $table->bigInteger('harga');
            $table->smallInteger('berat');
            $table->text('review');
            $table->float('rating');                      
            $table->bigInteger('fk_id_brand');
            $table->bigInteger('fk_id_kategori');
            $table->timestamps();
            $table->softDeletes();
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
