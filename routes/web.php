<?php

use Illuminate\Support\Facades\Route;
use App\hhtp\controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);
// This route serves your React app for all URLs
Route::get('/{any?}', function () {
    return view('app');
})->where('any', '.*');
// i will do it for lavarel 
