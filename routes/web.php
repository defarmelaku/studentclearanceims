<?php

use Illuminate\Support\Facades\Route;
use App\Models\proctor;
use App\Models\student;
use App\Http\controllers\studentController;
use App\Http\Controllers\proctorController;
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
Route::get('/student/register',[studentController::class,'register'])->name('student/register');
Route::post('student.register',[studentController::class,'store'])->name('student/register');
Route::get('/home', [App\Http\Controllers\HomeController ::class, 'index'])->name('home');
Route::get('/student/list', [studentController::class, 'get_all'])->name('student/list');
Route::get('/student/edit/{id}', [studentController::class, 'edit']);
Route::post('/student/update',[studentController::class,'update'])->name('student/update');
Route::get('/student/delete/{id}', [studentController::class, 'delete']);
Route::get('/student/search/{id}', [studentController::class, 'get_by_id']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');