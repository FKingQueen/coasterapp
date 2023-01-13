<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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



Auth::routes();

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/createArticle', [App\Http\Controllers\HomeController::class, 'createArticle'])->name('createArticle');
Route::post('/updateArticle/{id}', [App\Http\Controllers\HomeController::class, 'updateArticle'])->name('updateArticle');
Route::post('/deleteArticle/{id}', [App\Http\Controllers\HomeController::class, 'deleteArticle'])->name('deleteArticle');
// Route::post('/article', [App\Http\Controllers\HomeController::class, '/userManagement'])->name('article');

// Admin
Route::get('/userManagement', [App\Http\Controllers\AdminController::class, 'index'])->name('userManagement');
Route::post('/createUser', [App\Http\Controllers\AdminController::class, 'createUser'])->name('createUser');
Route::post('/updateUser/{id}', [App\Http\Controllers\AdminController::class, 'updateUser'])->name('updateUser');
