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

// Route::get('/', function () {
   // return view('welcome');
// });

Route::get('/', [App\Http\Controllers\AboutController::class, 'index'] );
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'] )->name('about');

Route::get('/tugas', [App\Http\Controllers\TugasController::class, 'index'] )->name('tugas');
Route::get('/tugas/{id}/edit', [TugasController::class, 'index'] )->name('tugas.edit');
Route::delete('/tugas/{id}/delete', [TugasController::class, 'destroy'])->name('tugas.delete');
// route form tambah data
Route::get('/tugas/create', [App\Http\Controllers\TugasController::class, 'create'])->name('tugas.create');
// route form simpan data
Route::post('/tugas/store', [App\Http\Controllers\TugasController::class, 'store'])->name('tugas.store');
Route::put('tugas/{id}/update', [App\Http\Controllers\TugasController::class, 'update'])->name('tugas.update');
Route::get('tugas/{id}/delete', [App\Http\Controllers\TugasController::class, 'destroy'])->name('tugas.delete');

Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
Route::post('/auth', [App\Http\Controllers\LoginController::class, 'authenticate'])->name('auth');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login')
->middleware('guest');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin')
->middleware('auth');
