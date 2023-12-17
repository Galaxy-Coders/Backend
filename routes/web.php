<?php

use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/admin", [BooksController::class, "index"])->name("adminPage");
Route::get("/admin/authors", [PageController::class, "adminAuthors"])->name("adminAuthors");

// CRUD for books

Route::resource('books', BooksController::class);

// CRUD for authors

Route::resource('authors', AuthorsController::class);

// page controller

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/authorsPage', [PageController::class, 'authorsPage'])->name('authorsPage');
Route::get('/booksPage', [PageController::class, 'booksPage'])->name('booksPage');
Route::get('/signin', [PageController::class, 'signin'])->name('signin');
Route::get('/signup', [PageController::class, 'signup'])->name('signup');
Route::get('/bookShelf/{id}', [PageController::class, 'bookShelf'])->name('bookShelf');
Route::get('/profile/{id}', [PageController::class, 'profileEdit'])->name('profile.edit');

// authenticate start

Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('register', [AuthController::class, 'register_store'])->name('register.store');
Route::get('/profile/{login}', [AuthController::class, 'showProfile'])->name('showProfile');
Route::put('/profile/{login}/edit', [AuthController::class, 'updateProfile'])->name('profile.update');