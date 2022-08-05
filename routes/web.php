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


#rutas para el apartado de login
Route::prefix('admin')->group(function () {
    Route::get('/', [LoginController::class,"show_login"])->middleware('guest')->name('index_login');

    Route::get('/dashboard', [AdminController::class,"dashboard"])->middleware('auth')->name('dashboard');
    Route::get('/reportes', [AdminController::class,"report_excel"])->middleware('auth')->name('report_excel');
   
     
    Route::post('/reportes/excelExport', [AdminController::class,"export_report_excel"])->middleware('auth')->name('report_excel_export');
    Route::get('/buscar_alumno', [AdminController::class,"buscar_alumno"])->middleware('auth')->name('buscar_alumno');
    Route::post('/reportes/exportHistory', [AdminController::class,"export_report_excel_alumno"])->middleware('auth')->name('report_excel_export_alumno');
    Route::post('/reportes/buscar_alumno_online', [AdminController::class,"buscar_alumno_online"])->middleware('auth')->name('buscar_alumno_online');
    Route::post('/positivos', [AdminController::class,"casosPositivos"])->name('positivos');
    Route::post('/sospechosos', [AdminController::class,"casosSospechosos"])->name('sospechosos');
    
    
    //registro
    Route::get('/register', [AdminController::class,"registration_users"])->middleware('auth')->name('registration_users');

    //noticias
    Route::get('/news', [AdminController::class,"news"])->middleware('auth')->name('news');


    ///login y logout
    Route::post('/login', [LoginController::class,"login"])->name('login');
    Route::post('/logout', [LoginController::class,"logout"])->name('logout');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');