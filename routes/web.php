<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

// campakkan user
Route::redirect('/', '/daily');

Route::get('/daily', [TodoController::class, 'index'])->name("daily");
Route::post('/daily', [TodoController::class, 'store'])->name('daily.task');