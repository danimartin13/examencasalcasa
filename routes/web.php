<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasalController;

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

Route::get('/', [CasalController::class, 'index'])->name("index");

//anadircasal
Route::post('/anadircasal', [CasalController::class, 'anadircasal'])->name("anadircasal");
// crearcasal
Route::get('/crearcasal', [CasalController::class, 'crearcasal'])->name("crearcasal");
//eliminar
Route::delete('/eliminar{producto}', [CasalController::class, 'eliminar'])->name('eliminar');
//editar
Route::get('/editar-{producto}', [CasalController::class, 'editar'])->name('editar');
//actcasal
Route::patch('/actcasal-{producto}', [CasalController::class, 'actcasal'])->name('actcasal');