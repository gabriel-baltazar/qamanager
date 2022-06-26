<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/tarefa/nova' , [TaskController::class, 'create'])->middleware(['auth'])->name('tarefa');
Route::get('/tarefa/index' , [TaskController::class, 'index'])->middleware(['auth'])->name('listaTarefas');
Route::get('/dashboard' , [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::post('/tarefa/add' , [TaskController::class, 'store'])->middleware(['auth'])->name('criarTarefa');
Route::get('/tarefa/{id}/edit' , [TaskController::class, 'edit'])->middleware(['auth'])->name('editarTarefa');
Route::post('/tarefa/update/{id}' , [TaskController::class, 'update'])->middleware(['auth'])->name('updateTarefa');


require __DIR__.'/auth.php';
