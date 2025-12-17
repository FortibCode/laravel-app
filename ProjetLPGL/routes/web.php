<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClasseController;

Route::get('/', [ClasseController::class, 'index'])->name('index');
Route::get('/ajout', [ClasseController::class, 'create'])->name('create.libelle');
Route::post('/ajout/store', [ClasseController::class, 'store'])->name('store');
Route::get('/classes/{id}/edit', [ClasseController::class, 'edit'])->name('classes.edit');
Route::post('/update/traitement/{id}', [ClasseController::class, 'update'])->name('update');
Route::get('/delete/classe/{id}', [ClasseController::class, 'destroy'])->name('destroy');


