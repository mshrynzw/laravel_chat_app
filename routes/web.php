<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->group(function () {

    Route::get('/', [ChatController::class, 'index']);

    Route::post('/message', [ChatController::class, 'store']);

    Route::get('/message/{id}/edit', [ChatController::class, 'edit']);

    Route::post('/message/{id}/update', [ChatController::class, 'update']);

    Route::post('/message/{id}/delete', [ChatController::class, 'destroy']);

});

require __DIR__.'/auth.php';
