<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOutletToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('id_outlet')->nullable()->after('id');
            $table->enum('role', ['superadmin','admin','kasir','owner']);
            $table->foreign('id_outlet')->references('id')->on('outlet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['id_outlet']);
            $table->dropColumn('role');
            $table->dropColumn('id_outlet');
        });
    }
}
