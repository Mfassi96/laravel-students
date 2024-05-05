<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentsController;

Route::get('students',[studentsController::class,'index']);

Route::get('students/{id}',[studentsController::class,'show']);

Route::post('students',[studentsController::class,'store']);

Route::delete('students/{id}',[studentsController::class,'destroy']);

Route::put('students/{id}',[studentsController::class,'update']);

Route::patch('students/{id}',[studentsController::class,'updatepartial']);

