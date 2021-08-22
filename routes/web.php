<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/home/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create');
Route::post('/home/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store');
Route::get('/home/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::put('/home/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::delete('/home/destroy/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('destroy');
