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

Route::get('/', function () {
    return view('welcome');
});

Route:: get('/todos', [TodoController::class, 'index'])->name('todos.index');
Route:: get('/create', [TodoController::class, 'create'])->name('todos.create');
Route:: post('/store-todo', [TodoController::class, 'store'])->name('todos.store');
Route:: get('/todos/{id}', [TodoController::class, 'show'])->name('todos.show');
Route:: get('todos/edit/{id}', [TodoController::class, 'edit'])->name('todos.edit');
Route:: post('todos/update/{id}', [TodoController::class, 'update'])->name('todos.update');
Route:: get('todos/destroy/{id}', [TodoController::class, 'destroy'])->name('todos.destroy');
Route:: get('todos/completed/{id}', [TodoController::class, 'completed'])->name('todos.completed');