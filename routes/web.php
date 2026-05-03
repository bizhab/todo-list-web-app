<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/tasks', [App\Http\Controllers\TaskController::class, 'store'])->name('tasks.store');


