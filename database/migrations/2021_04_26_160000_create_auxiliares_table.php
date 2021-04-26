<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuxiliaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auxiliares', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_padre');
            $table->unsignedBigInteger('id_hijo');
            $table->foreign('id_padre')->references('id')->on('acciones');
            $table->foreign('id_hijo')->references('id')->on('acciones');
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
        Schema::dropIfExists('auxiliares');
    }
}
