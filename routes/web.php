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

#Rutas para el apartado de encuesta
Route::prefix('encuesta')->group(function () {
    //Ruta para mostrar informacion al alumno.
    Route::get('/', [EncuestaController::class,"index"]);
    //Ruta para solicitar informacion basica al alumno.
    Route::get('/info',[EncuestaController::class,"info_alumno"])->name('info');
    
    //ruta para enviar los datos del alumno
    Route::post('/save',[EncuestaController::class,"save_alumno"])->name('save_alumno');
    Route::post('/save_encuesta',[EncuestaController::class,"save_encuesta"])->name('save_encuesta');
    Route::post('/save_comprobante',[EncuestaController::class,"save_comprobante"])->name('save_comprobante');

    //Ruta para que el alumno conteste el cuestrioario.
    Route::get('/info/{matricula}/{folio}',[EncuestaController::class,"show_encuesta"])
        ->where('matricula','[0-9]+')
        ->where('folio','[0-9]+');
    
    //Ruta para entregar PDF de resultados al alumno.
    Route::get('/resultados/pdf/{matricula}/{folio}',[EncuestaController::class,"show_pdf_resultados"])
        ->where('matricula','[0-9]+')
        ->where('folio','[0-9]+');

    //Ruta para solicitar la matricula para descargar PDF
    Route::get('/pdf',[EncuestaController::class,"descargar_pdf_matricula"])->name('dowloadPDFmatricula');

    //Ruta para descargar PDF con matricula
    Route::get('/resultados/pdf/{matricula}/{telefono}',[EncuestaController::class,"show_pdf_resultados_matricula"])
        ->where('matricula','[0-9]+');
    
});

#Rutas para el apartado de verificación.
Route::prefix('verificacion')->group(function () {
    //Ruta de inicio para la verificacion (Policia)
    Route::get('/', [VerificacionController::class,"index"])->name('verificacion');
    //Ruta para verificar con QR.
    Route::get('/qr', [VerificacionController::class,"show_qr"]);
    Route::post('/show_info_qr', [VerificacionController::class,"show_info_qr"])->name('show_info_qr');
    //Ruta para verificar con MATRICULA.
    Route::get('/matricula', [VerificacionController::class,"show_matricula"]);
    Route::get('/datosLocales', [VerificacionController::class,"datosEncuestas"])->name('datosLocales');
    //Ruta para verificar con CURP.
    Route::get('/curp', [VerificacionController::class,"show_curp"]);
});

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