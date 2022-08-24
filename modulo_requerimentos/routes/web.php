<?php

use Illuminate\Support\Facades\Route;

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
/**
 * Route::get('/', function () {    return view('welcome');});
 * Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.principal'); 
 */
Route::get('/', [\App\Http\Controllers\MenuController::class, 'menu'])->name('site.menu');

Route::get('/inclusao', [\App\Http\Controllers\InclusaoController::class, 'inclusao'])->name('site.inclusao');

Route::get('/exclusao', [\App\Http\Controllers\ExclusaoController::class, 'exclusao'])->name('site.exclusao');
    
Route::get('/troca', [\App\Http\Controllers\TrocaController::class, 'troca'])->name('site.troca');

Route::get('/quebra', [\App\Http\Controllers\QuebraController::class, 'quebra'])->name('site.quebra');

Route::get('/equivalencia', [\App\Http\Controllers\EquivalenciaController::class, 'equivalencia'])->name('site.equivalencia');
   
Route::get('/abono', [\App\Http\Controllers\AbonoController::class, 'abono'])->name('site.abono');

Route::get('/geral', [\App\Http\Controllers\GeralController::class, 'geral'])->name('site.geral');
