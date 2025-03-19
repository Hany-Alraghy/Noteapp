<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\NoteController;
use App\Http\Controllers\ProfileController;

//
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

//
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::put('/profile', [AuthController::class, 'updateProfile']);

    //

    Route::post('/notes', [NoteController::class, 'store']); 
    Route::get('/notes', [NoteController::class, 'index']); 
    Route::get('/notes/{id}', [NoteController::class, 'show']); 
    Route::put('/notes/{id}', [NoteController::class, 'update']); 
    Route::delete('/notes/{id}', [NoteController::class, 'destroy']); 

});