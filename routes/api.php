<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ImagenesController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/users', [UsersController::class, 'get']);
Route::post('/users/add', [UsersController::class, 'add']);

Route::get('/imagenes', [ImagenesController::class, 'get']);
Route::post('/imagenes/add', [ImagenesController::class, 'add']);
Route::patch('/imagenes/update/{id}', [ImagenesController::class, 'update']);
Route::delete('/imagenes/delete/{id}', [ImagenesController::class, 'delete']);
Route::get('/imagenes/favoritas', [ImagenesController::class, 'favoritas']);