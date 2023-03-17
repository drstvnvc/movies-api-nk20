<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/movies', [MoviesController::class, 'index']);
Route::get('/movies/{id}', [MoviesController::class, 'show']);
Route::post('/movies', [MoviesController::class, 'store']);
Route::delete('/movies/{id}', [MoviesController::class, 'destroy']);
Route::put('/movies/{id}', [MoviesController::class, 'update']);
