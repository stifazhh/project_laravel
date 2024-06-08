<?php

use App\http\Controllers\SiswaController;
use App\http\Controllers\KelasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/create', [SiswaController::class, 'create']);
Route::post('/siswa', [SiswaController::class, 'store']);
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);
Route::patch('/siswa/{id}', [SiswaController::class, 'update']);
Route::delete('/siswa/{id}', [SiswaController::class, 'destroy']);


Route::get('/t_kelas', [KelasController::class, 'index']);
Route::get('/t_kelas/create', [KelasController::class, 'create']);
Route::post('/t_kelas', [KelasController::class, 'store']);
Route::get('/t_kelas/edit/{id}', [KelasController::class, 'edit']);
Route::patch('/t_kelas/{id}', [KelasController::class, 'update']);
Route::delete('/t_kelas/{id}', [KelasController::class, 'destroy']);

Route::get('/siti', [SiswaController::class, 'siti']);

Route::get('/haechan', [SiswaController::class, 'haechan']);

Route::get('/renjun', [SiswaController::class, 'renjun']);