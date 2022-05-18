<?php

use Illuminate\Support\Facades\Route;
use App\Models\proctor;
use App\Models\student;
use App\Http\controllers\StudentController;
use App\Http\Controllers\ProctorController;
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Auth::routes();
Route::get('/student/register',[StudentController::class,'register'])->name('student/register');
Route::post('student.register',[StudentController::class,'store'])->name('student/register');
Route::get('/student/list', [StudentController::class, 'get_all'])->name('student/list');
Route::get('/student/edit/{id}', [StudentController::class, 'edit']);
Route::post('/student/update',[StudentController::class,'update'])->name('student/update');
Route::get('/student/delete/{id}', [StudentController::class, 'delete']);
Route::get('/student/search/{id}', [StudentController::class, 'get_by_id']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/proctor/register',[ProctorController::class,'register'])->name('proctor/register');
Route::post('proctor.register',[ProctorController::class,'store'])->name('proctor/register');
Route::get('/proctor/list', [ProctorController::class, 'get_all'])->name('proctor/list');
Route::get('/proctor/edit/{id}', [ProctorController::class, 'edit']);
Route::post('/proctor/update',[ProctorController::class,'update'])->name('proctor/update');
Route::get('/proctor/delete/{id}', [ProctorController::class, 'delete']);
Route::get('/proctor/search/{id}', [ProctorController::class, 'get_by_id']);


