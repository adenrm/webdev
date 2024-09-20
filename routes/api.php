<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// ? Index / List Student
Route::get('/student', [StudentController::class, 'index']);

// ? Show / Show Student
Route::get('/student/{nis}', [StudentController::class, 'show']);

// * Create / Create Student
Route::post('/student', [StudentController::class, 'create']);

// * Update / Update Student
Route::put('/student/{id}', [StudentController::class, 'update']);

// ! Destroy / Destory Student
Route::delete('/student/{id}', [StudentController::class, 'destroy']);
