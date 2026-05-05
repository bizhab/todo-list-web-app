<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/tasks', [App\Http\Controllers\TaskController::class, 'store'])->name('tasks.store');

Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
// Route buatan User 2 (Read & Delete)
Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');