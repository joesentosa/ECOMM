<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horder', function (Blueprint $table) {            
            $table->string('id_horder',12)->primary()->comment('example: H27102021001');
            $table->dateTime('tanggal_trans');
            $table->bigInteger('subtotal');
            $table->bigInteger('grandtotal');
            $table->string('metode_pembayaran',20);
            $table->smallInteger('statusOrder')->default(0)->comment('0:Belum Bayar, 1:Sudah Bayar, 2:Mengirimkan Barang, 3:selesai, 4:batal');
            $table->bigInteger('fk_id_shipping');
            $table->bigInteger('fk_id_dorder');
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
        Schema::dropIfExists('horder');
    }
}
