<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\UserController;

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

Route::get('/user', [UserController::class, 'show']);
Route::post('/addUser', [UserController::class, 'insert']);
Route::post('/updateUser', [UserController::class, 'update']);
Route::post('/deleteUser', [UserController::class, 'delete']);

Route::get('/kendaraan', [KendaraanController::class, 'show']);
Route::post('/addKendaraan', [KendaraanController::class, 'insert']);
Route::post('/updateKendaraan', [KendaraanController::class, 'update']);
Route::post('/deleteKendaraan', [KendaraanController::class, 'delete']);

Route::get('/peminjaman', [PeminjamanController::class, 'show']);
Route::post('/addPeminjaman', [PeminjamanController::class, 'insert']);
Route::post('/updatePeminjaman', [PeminjamanController::class, 'update']);
Route::post('/deletePeminjaman', [PeminjamanController::class, 'delete']);
