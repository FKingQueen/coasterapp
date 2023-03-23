<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuperAdminController;

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

//Dashboard
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/article/{id}', [App\Http\Controllers\DashboardController::class, 'articlePage'])->name('articlePage');
Route::get('/more', [App\Http\Controllers\DashboardController::class, 'articleMore'])->name('articleMore');
Route::get('/searchArticle', [App\Http\Controllers\DashboardController::class, 'searchArticle'])->name('searchArticle');

// Projects
Route::get('/project1', [App\Http\Controllers\ProjectsController::class, 'project1'])->name('project1');
Route::get('/project2', [App\Http\Controllers\ProjectsController::class, 'project2'])->name('project2');
Route::get('/project3', [App\Http\Controllers\ProjectsController::class, 'project3'])->name('project3');
Route::get('/project4', [App\Http\Controllers\ProjectsController::class, 'project4'])->name('project4');

// Services
Route::get('/mapServices', [App\Http\Controllers\ServicesController::class, 'mapServices'])->name('mapServices');

// Admin
Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
Route::post('/createArticle', [App\Http\Controllers\AdminController::class, 'createArticle'])->name('createArticle');
Route::post('/updateArticle/{id}', [App\Http\Controllers\AdminController::class, 'updateArticle'])->name('updateArticle');
Route::post('/deleteArticle/{id}', [App\Http\Controllers\AdminController::class, 'deleteArticle'])->name('deleteArticle');
Route::get('/userSetting', [App\Http\Controllers\AdminController::class, 'userSetting'])->name('userSetting');
// Route::post('/article', [App\Http\Controllers\HomeController::class, '/userManagement'])->name('article');

// SuperAdmin
Route::get('/userManagement', [App\Http\Controllers\SuperAdminController::class, 'index'])->name('userManagement');
Route::post('/createUser', [App\Http\Controllers\SuperAdminController::class, 'createUser'])->name('createUser');
Route::post('/updateUser/{id}', [App\Http\Controllers\SuperAdminController::class, 'updateUser'])->name('updateUser');
Route::post('/deleteUser/{id}', [App\Http\Controllers\SuperAdminController::class, 'deleteUser'])->name('deleteUser');
