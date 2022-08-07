<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\NewsController;
use App\Http\Controllers\Auth\LoginController;
use FontLib\Table\Type\name;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,"index"]);


#rutas para el apartado de login
Route::prefix('admin')->group(function () {
    Route::get('/', [LoginController::class,"show_login"])->middleware('guest')->name('index_login');

    Route::get('/dashboard', [AdminController::class,"dashboard"])->middleware('auth')->name('dashboard');
    Route::get('/reportes', [AdminController::class,"report_excel"])->middleware('auth')->name('report_excel');
   
     
    Route::get('/buscar_alumno', [AdminController::class,"buscar_alumno"])->middleware('auth')->name('buscar_alumno');
  
    
    
    //registro
    Route::get('/register', [AdminController::class,"registration_users"])->middleware('auth')->name('registration_users');

    //noticias
    Route::get('/news', [NewsController::class,"index"])->middleware('auth')->name('news_index');
    Route::get('/news/create', [NewsController::class,"create"])->middleware('auth')->name('news_create');
    Route::post('/news/store', [NewsController::class,"store"])->middleware('auth')->name('news_store');
    Route::delete('/news/destroy/{new}', [ProductsController::class,"destroy"])->middleware('auth')->name('news_delete');


    ///login y logout
    Route::post('/login', [LoginController::class,"login"])->name('login');
    Route::post('/logout', [LoginController::class,"logout"])->name('logout');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');