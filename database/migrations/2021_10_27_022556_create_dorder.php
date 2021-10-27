<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDorder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dorder', function (Blueprint $table) {
            $table->string('id_dorder',12)->primary()->comment('example: D27102021001');
            $table->bigInteger('qty');
            $table->bigInteger('total');
            $table->bigInteger('fk_id_barang');
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
        Schema::dropIfExists('dorder');
    }
}
