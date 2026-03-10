<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

Route::get('/', [ChatController::class, 'index']);

Route::post('/message', [ChatController::class, 'store']);

Route::get('/message/{id}/edit', [ChatController::class, 'edit']);

Route::post('/message/{id}/update', [ChatController::class, 'update']);

Route::post('/message/{id}/delete', [ChatController::class, 'destroy']);
