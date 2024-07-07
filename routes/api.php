<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/store-user', [UserController::class, 'storeUser']);
Route::get('/user/{username}/points', [UserController::class, 'getUserPoints']);
Route::post('/update-user-points', [UserController::class, 'updateUserPoints']);

Route::get('/genres', [GenreController::class, 'getGenres']);
Route::get('/words', [GenreController::class, 'getWordsByGenre']);
