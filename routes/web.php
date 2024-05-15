<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlarEstudiantes;

Route::get('/', [controlarEstudiantes::class, 'index'])->name('estudiantes.inicio');
Route::get('/crear', [controlarEstudiantes::class, 'create'])->name('estudiantes.crear');
Route::post('/store',[controlarEstudiantes::class,'store'])->name('estudiantes.store');