<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

Route::get('/', [ChatController::class, 'index']);

Route::post('/message', [ChatController::class, 'store']);
