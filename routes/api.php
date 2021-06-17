<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\KhsController;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahAktifController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\ProdiController;

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
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/dosen/{id}', [DosenController::class, 'show']);
Route::post('/dosen', [DosenController::class, 'store']);
Route::put('/dosen/{id}', [DosenController::class, 'update']);
Route::delete('/dosen/{id}', [DosenController::class, 'destroy']);


Route::get('/fakultas', [FakultasController::class, 'index']);
Route::get('/fakultas/{id}', [FakultasController::class, 'show']);
Route::post('/fakultas', [FakultasController::class, 'store']);
Route::put('/fakultas/{id}', [FakultasController::class, 'update']);
Route::delete('/fakultas/{id}', [FakultasController::class, 'destroy']);

Route::get('/khs', [KhsController::class, 'index']);
Route::get('/khs/{id}', [KhsController::class, 'show']);
Route::post('/khs', [KhsController::class, 'store']);
Route::put('/khs/{id}', [KhsController::class, 'update']);
Route::delete('/khs/{id}', [KhsController::class, 'destroy']);

Route::get('/krs', [KrsController::class, 'index']);
Route::get('/krs/{id}', [KrsController::class, 'show']);
Route::post('/krs', [KrsController::class, 'store']);
Route::put('/krs/{id}', [KrsController::class, 'update']);
Route::delete('/krs/{id}', [KrsController::class, 'destroy']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy']);

Route::get('/matakuliah_aktif', [MatakuliahAktifController::class, 'index']);
Route::get('/matakuliah_aktif/{id}', [MatakuliahAktifController::class, 'show']);
Route::post('/matakuliah_aktif', [MatakuliahAktifController::class, 'store']);
Route::put('/matakuliah_aktif/{id}', [MatakuliahAktifController::class, 'update']);
Route::delete('/matakuliah_aktif/{id}', [MatakuliahAktifController::class, 'destroy']);

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/{id}', [MatakuliahController::class, 'show']);
Route::post('/matakuliah', [MatakuliahController::class, 'store']);
Route::put('/matakuliah/{id}', [MatakuliahController::class, 'update']);
Route::delete('/matakuliah/{id}', [MatakuliahController::class, 'destroy']);

Route::get('/prodi', [ProdiController::class, 'index']);
Route::get('/prodi/{id}', [ProdiController::class, 'show']);
Route::post('/prodi', [ProdiController::class, 'store']);
Route::put('/prodi/{id}', [ProdiController::class, 'update']);
Route::delete('/prodi/{id}', [ProdiController::class, 'destroy']);
