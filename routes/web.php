<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlarEstudiantes;

Route::get('/', [controlarEstudiantes::class, 'index'])->name('estudiantes.inicio');
Route::get('/crear', [controlarEstudiantes::class, 'create'])->name('estudiantes.crear');
Route::post('/store',[controlarEstudiantes::class,'store'])->name('estudiantes.store');
Route::get('/show/{id}',[controlarEstudiantes::class,'show'])->name('estudiante.alerta');
// ruta editar
Route::delete('/destroy/{id}',[controlarEstudiantes::class,'destroy'])->name('estudiante.destroy');