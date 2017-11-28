<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstgedungconventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mstgedungconventions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_ruang');
            $table->string('shift');
            $table->enum('status_hari',['Hari Aktif','Hari Libur']);
            $table->bigInteger('harga');
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
        Schema::dropIfExists('mstgedungconventions');
    }
}
