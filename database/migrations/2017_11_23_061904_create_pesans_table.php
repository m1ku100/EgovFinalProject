<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pemohon')->unsigned();
            $table->foreign('id_pemohon')->references('id')->on('pemohons');
            $table->integer('nama_gedung');
            $table->date('tgl_pesan')->nullable();
            $table->string('acara');
            $table->integer('jumlah_tamu');
            $table->string('dekorasi')->nullable();
            $table->string('konsumsi')->nullable();
            $table->string('ruang');
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
        Schema::dropIfExists('pesans');
    }
}
