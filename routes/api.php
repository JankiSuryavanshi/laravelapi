<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

 
Route::get('/students',function(){
  return 'This is a api page';
});

Route::get('/students',[StudentController::class, 'index']);

// Route::get('/students/{id}',[StudentController::class, 'show']);

// Route::post('/students',[StudentController::class, 'store']);

// Route::put('/students/{id}',[StudentController::class, 'update']);

// Route::delete('/students/{id}',[StudentController::class, 'destroy']);

// Route::get('/students/search/{city}',[StudentController::class, 'search']);

//protected routes

Route::post('/register',[UserController::class, 'register']);

Route::middleware('auth:sanctum')->get('/students',[StudentController::class, 'index']);




