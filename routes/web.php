<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
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

// Pages
Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::get('/register', [PagesController::class, 'register'])->name('register');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/users', [DashboardController::class, 'users'])->name('users');
Route::get('/books', [DashboardController::class, 'books'])->name('books');
Route::get('/categories', [DashboardController::class, 'categories'])->name('categories-book');

// Register, Login, & Logout
Route::post('/registerStore', [RegisterController::class, 'registerStore'])->name('registerStore');
Route::post('/loginStore', [LoginController::class, 'loginStore'])->name('loginStore');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Books
Route::post('/create-book', [BookController::class, 'create'])->name('create-book');

// Category
Route::post('/create-category', [CategoryController::class, 'create'])->name('create-category');

// Data
Route::get('/editStore/{users:id}', [UserController::class, 'editStore'])->name('editStore');
Route::post('/updateStore/{users:id}', [UserController::class, 'updateStore'])->name('updateStore');
Route::get('/editCategory/{category:id}', [UserController::class, 'editCategory'])->name('editCategory');
Route::post('/updateCategory/{category:id}', [UserController::class, 'updateCategory'])->name('updateCategory');
Route::get('/editBook/{book:id}', [UserController::class, 'editBook'])->name('editBook');
Route::post('/updateBook/{book:id}', [UserController::class, 'updateBook'])->name('updateBook');
Route::post('/deleteStore/{id}', [UserController::class, 'deleteStore'])->name('deleteStore');