<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wos', function (Blueprint $table) {
            $table->bigIncrements('id_wo');
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->date('tanggal_masuk');
            $table->integer('no_wo');
            $table->date('deadline');
            $table->bigInteger('id_pel')->unsigned();
            $table->foreign('id_pel')->references('id_pel')->on('pelanggans')->onDelete('cascade');
            $table->date('tanggal_ambil');
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
        Schema::dropIfExists('wos');
    }
}
