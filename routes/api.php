<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController,
    UserController,
    FollowingController,
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

Route::prefix('/follow')
    ->controller(FollowingController::class)
    ->group(function () {
        Route::post('/follow', 'follow');
        Route::post('/unfollow', 'unfollow');
    });
