<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/tasks', [App\Http\Controllers\TaskController::class, 'store'])->name('tasks.store');

Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');