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

Route::get('/create-user',[App\Http\Controllers\UserController::class, 'create'])->name('user.create');
Route::post('/create-user',[App\Http\Controllers\UserController::class, 'store'])->name('user.store');

Route::get('/',[App\Http\Controllers\UserController::class, 'user_list'])->name('user.list');
Route::delete('/delete/{id}',[App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');

Route::get('/update/{id}',[App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::post('/update/{id}',[App\Http\Controllers\UserController::class, 'update'])->name('user.update');


