<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\ProducaoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("ingrediente/cadastrar", [EstoqueController::class, 'cadastrar']);
Route::get("ingredientes/getAll", [EstoqueController::class, 'getAll']);
Route::get("ingrediente/getId/{id}", [EstoqueController::class, 'getId']);
Route::put("ingrediente/atualizar/{id}", [EstoqueController::class, 'atualizar']);
Route::delete("ingrediente/deletar/{id}", [EstoqueController::class, 'deletar']);

Route::post("producao/cadastrar", [ProducaoController::class, 'cadastrar']);
Route::get("producao/getAll", [ProducaoController::class, 'getAll']);
