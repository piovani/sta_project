<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController,
    UserController,
};

Route::prefix('/')
    ->controller(UserController::class)
    ->group(function () {
        Route::get('/', 'index');
    });

Route::prefix('/post')
    ->controller(PostController::class)
    ->group(function () {
        Route::get('/', 'index');
        Route::post('/', 'store');
    });
