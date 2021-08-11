<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWoDetilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wo_detils', function (Blueprint $table) {
            $table->bigIncrements('wo_detil');
            $table->bigInteger('id_wo')->unsigned();
            $table->foreign('id_wo')->references('id_wo')->on('wos')->onDelete('cascade');
            $table->bigInteger('id_kategori')->unsigned();
            $table->foreign('id_kategori')->references('id_kategori')->on('kategoris')->onDelete('cascade');
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('id_status')->unsigned();
            $table->foreign('id_status')->references('id_status')->on('statuses')->onDelete('cascade');
            $table->string('nama_order');
            $table->bigInteger('jumlah')->unsigned();
            $table->bigInteger('h_satuan')->unsigned();
            $table->bigInteger('totalbayar')->unsigned();
            $table->string('ukuran')->nullable();
            $table->string('warna')->nullable();
            $table->string('jenis_bahan')->nullable();
            $table->string('keterangan')->nullable();            
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
        Schema::dropIfExists('wo_detils');
    }
}
