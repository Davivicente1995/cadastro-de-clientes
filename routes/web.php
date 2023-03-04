<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\EditarController;
use App\Http\Controllers\ClientesController;

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

Route::get('/', [HomeController::class,'index']);
Route::get('/cadastro', [CadastroController::class, 'create'])->name('cadastro.create');
Route::post('/cadastro', [CadastroController::class, 'store'])->name('cadastro.store');
Route::get('/clientes/{cliente}/edit', [EditarController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{cliente}', [EditarController::class, 'update'])->name('clientes.update');
Route::delete('/cliente/{cliente}', [ClientesController::class, 'destroy'])->name('cliente.destroy');
Route::post('/consulta', [ConsultaController::class, 'search'])->name('consulta.search');
Route::get('/consulta', [ConsultaController::class,'index'])->name('consulta.index');


//Route::post('/cadastro/search', 'ConsultaController@search')->name('cadastro.search');
