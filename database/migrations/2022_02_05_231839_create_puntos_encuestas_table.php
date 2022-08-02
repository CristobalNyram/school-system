<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuntosEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntos_encuestas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('iniciado');
            $table->string('p_1')->nullable();
            $table->string('p_2')->nullable();
            $table->string('p_3')->nullable();
            $table->string('p_4')->nullable();
            $table->string('p_5')->nullable();
            $table->string('p_6')->nullable();
            $table->string('p_7')->nullable();
            $table->string('p_8')->nullable();
            $table->string('p_9')->nullable();
            $table->string('p_10')->nullable();
            $table->string('p_11')->nullable();
            $table->string('p_12')->nullable();
            $table->string('p_13')->nullable();
            $table->string('p_14')->nullable();
            $table->string('p_15')->nullable();
            $table->string('p_16')->nullable();
            $table->string('p_17')->nullable();
            $table->string('p_18')->nullable();
            $table->string('urlPDF')->nullable();
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
        Schema::dropIfExists('puntos_encuestas');
    }
}