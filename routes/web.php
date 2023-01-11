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
    return redirect(route('login'));
});

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Employee route
    Route::get('/employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/employee/create', [App\Http\Controllers\EmployeeController::class, 'create'])->name('employee.create');
    Route::post('/employee/store', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');
    Route::get('/employee/edit/{id}', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');
    Route::post('/employee/update/{id}', [App\Http\Controllers\EmployeeController::class, 'update'])->name('employee.update');
    Route::get('/employee/delete/{id}', [App\Http\Controllers\EmployeeController::class, 'destroy'])->name('employee.destroy');
});
