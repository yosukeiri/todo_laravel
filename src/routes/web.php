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
Route::get('/create', [TodoController::class,'createTodos']);
Route::get('/edit/{id}', [TodoController::class,'editTodos'])->name('edit');
Route::post('/edit/update', [TodoController::class,'updateTodos'])->name('update'); 