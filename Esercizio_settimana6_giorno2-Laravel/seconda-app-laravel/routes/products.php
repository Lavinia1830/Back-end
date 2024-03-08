<?php

    use App\Http\Controllers\UserController;
    use Illuminate\Support\Facades\Route;

    Route::get('/products', [UserController::class, 'index']);
    Route::get('/products/create', [UserController::class, 'create']);
    Route::post('/products', [UserController::class, 'store']);
    Route::get('/products/{id}', [UserController::class, 'show']);
    Route::get('/products/{id}/edit', [UserController::class, 'edit']);
    Route::put('/products/{id}', [UserController::class, 'update']);
    Route::patch('/products/{id}', [UserController::class, 'update']);
    Route::delete('/products/{id}', [UserController::class, 'destroy']);



    