<?php

use App\Http\Controllers\CarController;
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

Route::get('/', [CarController::class, 'index']);
Route::get('/create-car', [CarController::class, 'create']);
Route::post('/add-car', [CarController::class, 'store']);
Route::post('/delete-car/{id}', [CarController::class, 'destroy']);

// tests perso

Route::get('/car/{id}', [CarController::class, 'show']);
Route::get('/edit/{id}', [CarController::class, 'edit']);
Route::post('/update/{id}', [CarController::class, 'update']);