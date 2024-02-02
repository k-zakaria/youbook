<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
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
Route::get('/',[ BookController::class ,'index'])->name('books.index');
Route::delete('/{book}',[ BookController::class ,'destroy'])->name('books.destroy');
Route::get('/book/{book}/edit', [ BookController::class ,'edit'])->name('books.edit');
Route::put('/book/{book}', [ BookController::class ,'update'])->name('books.update');
Route::get('/book/create',[ BookController::class , 'create'])->name('books.create');
Route::post('/book', [ BookController::class , 'store'])->name('books.store');