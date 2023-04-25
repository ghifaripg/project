<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\LoginController;

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
Route::get('/notes', [NotesController::class, 'showAll']);

Route::get('/notes/detail/{id}',
           [NotesController::class, 'getById']);

Route::get('/create', [NotesController::class, 'create']);
Route::post('/create', [NotesController::class, 'create']);

Route::get('/notes/delete/{id}', [NotesController::class, 'delete'])->name('notes.delete');

Route::get('/login', [LoginController::class, 'showLogin']);
Route::post('/login', [LoginController::class, 'doLogin']);

Route::get('/logout', [LoginController::class, 'doLogout']);

Route::get('/notes/edit/{id}', [NotesController::class, 'edit']);
Route::post('/notes/update/{id}', [NotesController::class, 'update']);

