<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CarrerasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carreras')->insert([
            'id' => 1,
            'carrera' => "PE PROCESOS BIOALIMENTARIOS",
        ]);
        DB::table('carreras')->insert([

            'id' => 2,
            'carrera' => "PE AGRICULTURA SUSTENTABLE Y PROTEGIDA",
        ]);
        DB::table('carreras')->insert([
            'id' => 3,
            'carrera' => "PE MANTENIMIENTO INDUSTRIAL",
        ]);
        DB::table('carreras')->insert([
            'id' => 4,
            'carrera' => "PE PROCESOS INDUSTRIALES",
        ]);
        DB::table('carreras')->insert([
            'id' => 5,
            'carrera' => "PE CONTADURÍA",
        ]);
        DB::table('carreras')->insert([
            'id' => 6,
            'carrera' => "PE ADMINISTRACIÓN",
        ]);
        DB::table('carreras')->insert([
            'id' => 7,
            'carrera' => "PE DESARROLLO DE NEGOCIOS Y MERCADOTECNIA",
        ]);
        DB::table('carreras')->insert([
            'id' => 8,
            'carrera' => "ING. EN TECNOLOGIAS DE LA INFORMACIÓN.",
        ]);
        DB::table('carreras')->insert([
            'id' => 9,
            'carrera' => " PE MECATRÓNICA.",
        ]);
       
    }
}