<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

// EMPLEADO
Route::get('/create-employee' , [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employee/save' , [EmployeeController::class, 'save'])->name('employee.save');
Route::get('/employee/edit/{id}' , [EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('/employee/update', [EmployeeController::class, 'update'])->name('employee.update');
Route::get('/employee/delete/{id}' , [EmployeeController::class, 'delete'])->name('employee.delete');


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
