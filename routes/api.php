<?php

use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/news/mostrar', [NewsController::class, 'index'])->name('api');

Route::post('/news/criar', [NewsController::class, 'store'])->name('api.news.store');