<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    //Área para a criação, edição e destruição de contas
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    
    //Leva para a index, que mostra a lista de notícias
    Route::get('index', [NewsController::class, 'index'])->name('newsIndex');
    

    Route::get('cadastrar', function () {
        return view('cadastro');
    });

    Route::post('/news/criar', [NewsController::class, 'store'])->name('api.news.store');
    
    Route::get('/show-news', function () {
        return view('show');
    })->name('show');
    
    Route::get('/show-news/{news}', [NewsController::class, 'show'])->name('newsShow');
    
    Route::get('/edit-news/{news}', [NewsController::class, 'edit'])->name('newsEdit');
    
    Route::get('/update-news/{news}', [NewsController::class, 'update'])->name('newsUpdate');
    
    Route::delete('/destroy-news/{news}', [NewsController::class, 'destroy'])->name('newsDestroy');
    
    
});
    
require __DIR__.'/auth.php';