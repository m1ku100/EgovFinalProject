<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSyaratpesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syaratpesans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pesan')->unsigned();
            $table->foreign('id_pesan')->references('id')->on('pesans');
            $table->string('ktp')->nullable();
            $table->enum('status',['Lengkap','Belum']);
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
        Schema::dropIfExists('syaratpesans');
    }
}
