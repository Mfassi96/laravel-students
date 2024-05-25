<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlarEstudiantes;

Route::get('/', [controlarEstudiantes::class, 'index'])->name('estudiantes.inicio');
Route::get('/crear', [controlarEstudiantes::class, 'create'])->name('estudiantes.crear');
Route::post('/store',[controlarEstudiantes::class,'store'])->name('estudiantes.store');
Route::get('/show/{id}',[controlarEstudiantes::class,'show'])->name('estudiante.alerta');
Route::delete('/destroy/{id}',[controlarEstudiantes::class,'destroy'])->name('estudiante.destroy');
// rutas para editar
Route::get('/edit/{id}',[controlarEstudiantes::class,'edit'])->name('estudiante.edit');
Route::put('/update/{id}',[controlarEstudiantes::class,'update'])->name('estudiante.update');