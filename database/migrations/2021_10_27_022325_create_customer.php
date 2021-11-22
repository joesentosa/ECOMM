<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id_customer');
            $table->string('firstname',20)->nullable();
            $table->string('lastname',30)->nullable();
            $table->string('username',50);
            $table->string('email',100);
            $table->string('address',100)->nullable();
            $table->string('kota',50)->nullable();
            $table->string('kodeZip',5)->nullable();
            $table->string('password',100);
            $table->string('google_id')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('customer');
    }
}
