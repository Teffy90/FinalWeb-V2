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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('admin', '\App\Http\Controllers\PersonaController');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Route::group(['prefix' => 'admin', 'as' => 'admin'], function(){
    route::get ('/', [PersonaController::class, 'index']) -> name('index');
    route::get ('usuarios', [PersonaController::class, 'create']) -> name('create');
    route::post ('usuarios', [PersonaController::class, 'store']) -> name('store');
    route::get ('editar_usuario', [PersonaController::class, 'edit']) -> name('edit');
    route::post ('editar_usuario', [PersonaController::class, 'edit']) -> name('edit');


    

}); */
