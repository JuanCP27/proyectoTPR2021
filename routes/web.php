<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MateriasController;
use App\Http\Controllers\ContenidosController;
use App\Http\Controllers\AsistenciasController;
use App\Http\Controllers\RegistrosController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('user', UsersController::class);
Route::resource('materias', MateriasController::class);
Route::resource('contenido', ContenidosController::class);
Route::resource('asistencia', AsistenciasController::class);
Route::resource('registros', RegistrosController::class);
