<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_outlet');
            $table->string('kode_invoice');
            $table->unsignedBigInteger('id_member');
            $table->dateTime('tanggal');
            $table->dateTime('batas_waktu');
            $table->dateTime('tgl_bayar');
            $table->integer('biaya_tambahan');
            $table->double('diskon');
            $table->double('pajak');
            $table->double('total');
            $table->enum('status',['baru','proses','selesai','diambil']);
            $table->enum('dibayar', ['lunas','belum dibayar']);
            $table->unsignedBigInteger('id_user');
            $table->timestamps();

            $table->foreign('id_outlet')->references('id')->on('outlet');
            $table->foreign('id_member')->references('id')->on('member');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
