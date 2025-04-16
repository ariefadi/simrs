<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

Route::get('/', function () {return view('welcome');});
Route::get('/pasien', [PasienController::class, 'index'])->name('index.index');
Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create');
Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit'])->name('pasien.edit');
Route::put('/pasien/update/{id}', [PasienController::class, 'update'])->name('pasien.update');
Route::delete('/pasien/delete/{id}', [PasienController::class, 'delete'])->name('pasien.delete');
