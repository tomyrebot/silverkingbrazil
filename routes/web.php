<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



Route::group(
    ['prefix' => LaravelLocalization::setLocale()],
    function() {
        Route::get('/', [HomeController::class, 'index']);
        Route::get('/hi', [HomeController::class, 'hi']);
    }
);
