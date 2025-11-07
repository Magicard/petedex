<?php

use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CatController::class, 'index'])->name('cats.index');
Route::get('/cats/{id}', [CatController::class, 'show'])->name('cats.show');
