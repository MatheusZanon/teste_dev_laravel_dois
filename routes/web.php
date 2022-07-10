<?php

use App\Http\Controllers\BeneficiarioController;
use App\Http\Controllers\PlansController;
use App\Http\Controllers\HomepageController;
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

Route::get('/', [HomepageController::class, 'index'])->name('homepage.index');


/* PLANOS */
Route::get('plans/home', [PlansController::class, 'index'])->name('plans.home');
Route::get('plans/show/{id}', [PlansController::class, 'show'])->name('plans.show');


/* BENEFICIÁRIOS */
Route::get('beneficiarios/home', [BeneficiarioController::class, 'index'])->name('beneficiarios.home');
