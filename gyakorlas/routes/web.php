<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('api/tasks', [TaskController::class, 'index']);
Route::get('api/tasks/{id}', [TaskController::class, 'show']);
Route::post('api/tasks', [TaskController::class, 'store']);
Route::put('api/tasks/{id}', [TaskController::class, 'update']);
Route::delete('api/tasks/{id}', [TaskController::class, 'destroy']);
Route::get('api/users', [TaskController::class, 'index']);
Route::get('task/new', [TaskController::class, 'newView']);
Route::get('task/edit/{id}', [TaskController::class, 'editView']);
Route::get('task/list', [TaskController::class, 'listView']);
