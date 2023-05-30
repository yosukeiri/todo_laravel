<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/', [TodoController::class,'getTodos']);
Route::delete('/deleteTodo/{id}', [TodoController::class,'deleteTodo'])->name('deleteTodo');
Route::get('/create', [TodoController::class,'createPage'])->name('createPage');
Route::post('/createTodo', [TodoController::class,'createTodo'])->name('createTodo');
Route::get('/edit/{id}', [TodoController::class,'editTodo'])->name('edit');
Route::post('/edit/update', [TodoController::class,'updateTodo'])->name('update'); 