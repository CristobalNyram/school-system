<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VerificacionController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Encuesta;
use FontLib\Table\Type\name;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,"index"]);


#rutas para el apartado de login(Medico).
Route::prefix('admin')->group(function () {
    //Ruta para mostrar informacion al alumno.
    Route::get('/', [LoginController::class,"show_login"])->middleware('guest')->name('index_login');
    //Ruta para mostrar informacion al alumno.
    Route::get('/dashboard', [AdminController::class,"dashboard"])->middleware('auth')->name('dashboard');
    Route::get('/reportes', [AdminController::class,"report_excel"])->middleware('auth')->name('report_excel');
    Route::post('/reportes/excelExport', [AdminController::class,"export_report_excel"])->middleware('auth')->name('report_excel_export');
    Route::get('/buscar_alumno', [AdminController::class,"buscar_alumno"])->middleware('auth')->name('buscar_alumno');
    Route::post('/reportes/exportHistory', [AdminController::class,"export_report_excel_alumno"])->middleware('auth')->name('report_excel_export_alumno');
    Route::post('/reportes/buscar_alumno_online', [AdminController::class,"buscar_alumno_online"])->middleware('auth')->name('buscar_alumno_online');
    //Rutas para graficas
    Route::post('/positivos', [AdminController::class,"casosPositivos"])->name('positivos');
    Route::post('/sospechosos', [AdminController::class,"casosSospechosos"])->name('sospechosos');
    //Ruta para solicitar informacion basica al alumno.
    Route::post('/login', [LoginController::class,"login"])->name('login');
    Route::post('/logout', [LoginController::class,"logout"])->name('logout');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');