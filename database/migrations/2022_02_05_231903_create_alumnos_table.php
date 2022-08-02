<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id('matricula');
            $table->string('curp', 18)->unique();
            $table->string('nombre', 255);
            $table->string('ape_paterno', 255);
            $table->string('ape_materno', 255);
            $table->string('genero', 1);
            $table->bigInteger('edad');
            $table->bigInteger('cuatrimeste');
            $table->string('telefono',10);
            $table->string('email');
            $table->string('comprobante',255)->nullable();
            $table->unsignedBigInteger('id_carrera');
            $table->foreign('id_carrera')->references('id')->on('carreras');
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
        Schema::dropIfExists('alumnos');
    }
}