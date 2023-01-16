<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
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
