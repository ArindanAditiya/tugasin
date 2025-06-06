<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

// campakkan user
Route::redirect('/', '/daily');

Route::get('/daily', [TodoController::class, 'index'])->name("daily");
Route::post('/daily', [TodoController::class, 'store'])->name('daily.task.insert');
Route::delete("/daily/{id}", [TodoController::class, "destroy"])->name("daily.task.delete");
Route::put("/daily/{id}", [TodoController::class, "update"])->name("daily.task.edit");