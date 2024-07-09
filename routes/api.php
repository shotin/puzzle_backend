<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/store-user', [UserController::class, 'storeUser']);
Route::get('/user/{username}/details', [UserController::class, 'getUserPoints']);
Route::post('/update-user-points', [UserController::class, 'updateUserPoints']);
Route::get('/genres', [GenreController::class, 'getGenres']);
Route::get('/words', [GenreController::class, 'getWordsByGenre']);
Route::post('/completeTask', [TaskController::class, 'completeTask']);
Route::get('/claimedTasks', [TaskController::class, 'claimedTasks']);
Route::post('/claimTask', [TaskController::class, 'claimTask']);

