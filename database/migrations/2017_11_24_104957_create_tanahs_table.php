<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanahs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pemohon_rumah')->unsigned();
            $table->foreign('id_pemohon_rumah')->references('id')->on('pemohonrumahs');
            $table->text('lokasi_tanah');
            $table->integer('id_kecamatan')->unsigned();
            $table->foreign('id_kecamatan')->references('id')->on('mstkecamatans');
            $table->integer('id_kelurahan')->unsigned();
            $table->foreign('id_kelurahan')->references('id')->on('mstkelurahans');
            $table->integer('luas_tanah');
            $table->string('batas_utara');
            $table->string('batas_timur');
            $table->string('batas_barat');
            $table->string('batas_selatan');
            $table->string('tahun_mulai');
            $table->string('asal_tanah');
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
        Schema::dropIfExists('tanahs');
    }
}
