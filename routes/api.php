<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



/* Rotas para os Planos */
Route::get('/plans', [App\Http\Controllers\Api\PlansController::class, 'index'])->name('plans.index');




/* Rotas para os Beneficiarios */
Route::get('/beneficiarios', [App\Http\Controllers\Api\BeneficiariosController::class, 'index'])->name('beneficiarios.index');
