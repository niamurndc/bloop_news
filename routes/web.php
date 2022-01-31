<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::get('/', [FrontController::class, 'index']);
Route::get('/category/{slug}', [FrontController::class, 'viewcat']);
Route::get('/post/{slug}', [FrontController::class, 'viewpost']);

Auth::routes();

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin category
Route::get('/admin/categories', [CategoryController::class, 'index']);
Route::get('/admin/category/add', [CategoryController::class, 'create']);
Route::post('/admin/category/add', [CategoryController::class, 'store']);
Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit']);
Route::get('/admin/category/delete/{id}', [CategoryController::class, 'delete']);
Route::post('/admin/category/edit/{id}', [CategoryController::class, 'update']);

// admin post 
Route::get('/admin/posts', [PostController::class, 'index']);
Route::get('/admin/post/add', [PostController::class, 'create']);
Route::post('/admin/blog/add', [PostController::class, 'store']);
Route::get('/admin/post/edit/{id}', [PostController::class, 'edit']);
Route::get('/admin/post/delete/{id}', [PostController::class, 'delete']);
Route::post('/admin/blog/edit/{id}', [PostController::class, 'update']);
