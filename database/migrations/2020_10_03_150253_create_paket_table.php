<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_outlet')->nullable();
            $table->string('nama_paket');
            $table->enum('jenis', ['Kiloan','Bed Cover','Selimut','Karpet','dll']);
            $table->integer('harga')->length(20);
            $table->foreign('id_outlet')->references('id')->on('outlet');
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
        Schema::dropIfExists('paket');
    }
}
