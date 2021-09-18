<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);
//追加

Route::post('/todo/create', [TodoController::class, 'create']);
//更新

Route::post('/todo/update', [TodoController::class, 'update']);
Route::get('/todo/update', function () {
    //
})->name('/todo/update');
//削除

Route::post('/todo/delete', [TodoController::class, 'delete']);
Route::get('/todo/delete', function () {
    //
})->name('/todo/delete');