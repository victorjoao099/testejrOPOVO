<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('index', [NewsController::class, 'index'])->name('news.index');

Route::get('cadastrar', function () {
    return view('cadastro');
});

Route::get('/show-news', function () {
    return view('show');
})->name('show');

Route::get('/show-news/{news}', [NewsController::class, 'show'])->name('newsShow');