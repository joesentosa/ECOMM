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
            $table->string('id_order',12)->primary()->comment('example: H15754548514');
            $table->dateTime('tanggal_trans');
            $table->bigInteger('subtotal');
            $table->string('metode_pembayaran',100);
            $table->smallInteger('statusOrder')->default(0)->comment('0:Belum Bayar, 1:Sudah Bayar, 2:Mengirimkan Barang, 3:selesai, 4:batal');
            $table->string('kurir',20);
            $table->string('jenis_layanan',20);
            $table->bigInteger('total_shipping');
            $table->string('fullname')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->longText('order_notes')->nullable();
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
        Schema::dropIfExists('horder');
    }
}
