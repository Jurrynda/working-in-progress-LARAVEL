<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [PostController::class, 'index'])->name('home');


Route::get('/logout', [LoginController::class, 'logout']);

Route::resource('users', UserController::class);

Route::resource('posts', PostController::class);

Route::resource('comments', CommentController::class);
// ->only([
//     'update', 'store', 'destroy', 'edit'
// ]);

// Route::get('/about', [PagesController::class, 'about']);

// Route::get('/contact', [PagesController::class, 'contact']);




