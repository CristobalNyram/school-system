<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->increments('folio');
            $table->unsignedBigInteger('matricula_alumno');
            $table->bigInteger('id_puntos_encuesta')->unsigned()->index();
            $table->integer('resultado')->nullable();
            $table->integer('puntos')->nullable();
            $table->timestamps();
            $table->foreign('matricula_alumno')
                ->references('matricula')->on('alumnos');
            $table->foreign('id_puntos_encuesta')
                ->references('id')->on('puntos_encuestas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encuestas');
    }
}