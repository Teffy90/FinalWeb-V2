<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { //muestra la vista principal
    return view('index');
}); 

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\PersonaController::class, 'index'])->name('index');
Route::resource('admin', '\App\Http\Controllers\PersonaController');
Route::resource('productos', '\App\Http\Controllers\ProductoController');
Route::get('downloadUser-pdf','\App\Http\Controllers\PersonaController@descargarPDF')->name('descargarPDF');
Route::get('downloadProducto-pdf','\App\Http\Controllers\ProductoController@descargarPDF2')->name('descargarPDF2');

Auth::routes();



