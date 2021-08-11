<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWoDetilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wo_detil', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wo_id');
            $table->foreign('wo_id')->references('id')->on('wos')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('detil_id');
            $table->foreign('detil_id')->references('id')->on('detils')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('wo_detil');
    }
}
