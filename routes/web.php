<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);
//追加
Route::get('/add', [TodoController::class, 'add']);
Route::post('/add', [TodoController::class, 'create']);
//更新
Route::get('/edit', [TodoController::class, 'edit']);
Route::post('/edit', [TodoController::class, 'update']);